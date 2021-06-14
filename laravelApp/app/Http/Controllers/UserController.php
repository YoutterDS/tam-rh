<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\PendingUser;
use App\Models\Preregister;
use Illuminate\Http\Request;
use App\Mail\PendingUserEmails;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Mail\PendingUser as MailPendingUser;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    // Email Verification
    public function emailVerification()
    {
        event(new Registered(Auth()->user()));
        return view('auth.verify-email');
    }

    public function emailVerificationRequest(EmailVerificationRequest $request)
    {
        $request->fulfill();
        $request->user()->active = 'Y';
        $request->user()->save();

        // Delete user from pending users
        $pendingUser = PendingUser::where('email', auth()->user()->email)->get()->first();
        if($pendingUser){
            $pendingUser->delete();
        }

        Session::flash('emailVerified', "Email verification successfully");
        return redirect('/dashboard');
    }

    public function list()
    {
        $users = User::where('id', '<>', 0)->get();
        return view('welcome', compact('users'));
    }

    public function getFormEmail($token)
    {
        if( $token ) {

        }
    }
}
