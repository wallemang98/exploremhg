<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

//Linking mail classes
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    //email body
      public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      //storing passed data
      $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //Sending contact form 'from' custom email to webmail
      //server. Email structure uses view('email') with
      //data passed through into view, to send eamil
        return $this->from('michaelgarrett@exploremhg.com')->
        subject('Contact Form Submission')->
        view('email')->with('data', $this->data);
    }
}
