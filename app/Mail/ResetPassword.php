<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $name, $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $code)
    {
        $this->name = $name;
        $this->email = $email;
        $this->code = $code;
        $this->subject('Reset Password');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reset_password');
    }
}
