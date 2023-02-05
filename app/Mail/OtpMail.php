<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;
    public $tempuser;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tempuser)
    {
        $this->tempuser = $tempuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.otp_send')->subject('Otp - '.env('APP_NAME'))->with('tempuser', $this->tempuser);
    }
}
