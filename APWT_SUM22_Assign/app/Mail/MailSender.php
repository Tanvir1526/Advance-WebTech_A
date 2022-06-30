<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $Subject="";
    private $Body="";
  

    public function __construct($Subject,$Body)
    {
        $this->Subject=$Subject;
        $this->Body=$Body;
    }
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email')
        ->with('otp',$this->Body)
        ->subject($this->Subject);
    }
}
