<?php

namespace App\Mail;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompanyUpdatedEmails extends Mailable
{
    use Queueable, SerializesModels;
    public $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $company )
    {
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@tam-rh.com')
                    ->subject('TAM-RH: Datos de compañia modificados "' . $this->company->name .'"')
                    ->markdown('emails.companies.updated', ['company'=>$this->company]);
    }
}
