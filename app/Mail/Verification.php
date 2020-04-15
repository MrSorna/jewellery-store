<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verification extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $name, $verification_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $verification_code)
    {
        $this->name = $name;
        $this->email = $email;
        $this->verification_code = $verification_code;
        $this->subject('Please verify your email address.');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification');
    }
}
