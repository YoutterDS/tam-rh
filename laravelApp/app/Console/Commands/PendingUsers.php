<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\PendingUser;
use App\Mail\PendingUserEmails;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class PendingUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:pending-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Send reminder emails to users who haven't yet completed registration";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         // Execute Every hour
         $pendingUsers       = PendingUser::all()->sortBy('created_at');
         $actualDate         = Carbon::now();
         $usersFirstEmail    = [];
         $usersSecondEmail   = [];
         $usersThirdEmail    = [];
         foreach( $pendingUsers as $pendingUser ) {

            // First email at 24 hours
            if( !$pendingUser->first_email_send_at ) {
                $createdAt          = $pendingUser->created_at;
                $diffInDays         = $createdAt->diffInDays($actualDate);
                if( $diffInDays >= 1 && $diffInDays <= 7 ){
                    $url            = route('user.register', ['locale'=>$pendingUser->locale, 'package'=>$pendingUser->package]);
                    Mail::to($pendingUser->email)
                        ->locale($pendingUser->locale)
                        ->send(new PendingUserEmails($pendingUser, $url, 1 ));
                    if ( !Mail::failures() ) {
                        $pendingUser->first_email_send_at = Carbon::now();
                        $pendingUser->save();
                    }
                }
            }

            // Second email at week
            if( $pendingUser->first_email_send_at  && !$pendingUser->second_email_send_at ) {
                $firstEmailSendAt       = $pendingUser->first_email_send_at;
                $diffInDays             = $firstEmailSendAt->diffInDays($actualDate);
                $totalDaysInActualMonth = $actualDate->daysInMonth;
                if( $diffInDays >= 7 && $diffInDays <= $totalDaysInActualMonth ){
                    $url                = route('user.register', ['locale'=>$pendingUser->locale, 'package'=>$pendingUser->package]);
                    Mail::to($pendingUser->email)
                        ->locale($pendingUser->locale)
                        ->send(new PendingUserEmails($pendingUser, $url, 2 ));
                    if ( !Mail::failures() ) {
                        $pendingUser->second_email_send_at = Carbon::now();
                        $pendingUser->save();
                    }
                }
            }

            // Third email at month
            if( $pendingUser->second_email_send_at && !$pendingUser->third_email_send_at ) {
                $secondEmailSendAt  = $pendingUser->second_email_send_at;
                $diffInDays         = $secondEmailSendAt->diffInMonths($actualDate);
                if( $diffInDays >= 1 ){
                    $url            = route('user.register', ['locale'=>$pendingUser->locale, 'package'=>$pendingUser->package]);
                    Mail::to($pendingUser->email)
                        ->locale($pendingUser->locale)
                        ->send(new PendingUserEmails($pendingUser, $url, 3 ));
                    if ( !Mail::failures() ) {
                        $pendingUser->third_email_send_at = Carbon::now();
                        $pendingUser->save();
                    }
                }
            }

            // Delete user from users table
            if( $pendingUser->third_email_send_at ) {
                $thirdEmailSendAt   = $pendingUser->third_email_send_at;
                $diffInDays         = $thirdEmailSendAt->diffInMonths($actualDate);
                if( $diffInDays >= 1 ){
                    /*
                    Mail::to($pendingUser->email)
                        ->locale($pendingUser->locale)
                        ->send(new PendingUserEmails($pendingUser, '', 100 ));
                        */
                    // if ( !Mail::failures() ) {
                        $pendingUser->deleted_at = Carbon::now();
                        $pendingUser->save();

                        $user = User::find($pendingUser->id);
                        if( $user ) {
                            $user->delete();
                        }
                    // }
                }
            }
         }
    }
}
