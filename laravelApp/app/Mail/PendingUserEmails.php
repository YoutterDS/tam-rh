<?php

namespace App\Mail;

use App\Models\PendingUser;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PendingUserEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $url, $count;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PendingUser $user, String $url, int $count)
    {
        $this->user     = $user;
        $this->url      = $url;
        $this->count    = $count;
    }

    /**
     * Build the message.
     *
     * @return $this
    */
    public function build()
    {
        $subject = "";
        switch($this->count) {
            case '1':
                $subject = "Primer aviso";
            break;
            case '2':
                $subject = "Segundo aviso";
            break;
            case '3':
                $subject = "Tercer y último aviso";
            break;
        }
        return $this->to($this->user->email)
                    ->subject($subject)
                    ->markdown('emails.users.pending', ['user' => $this->user, 'url' => $this->url, 'count'=>$this->count])
                    ->text('emails.users.pending_plain');
    }
}
