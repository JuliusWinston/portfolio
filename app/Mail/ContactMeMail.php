<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactMeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The request instance
     *
     *@var App\Http\Request
     */
    public $request;

    /**
     * Create a new message instance.
     *
     *@param App\Http\Request $request
     * @return void
     */


    public function __construct(Request $request)
    {
        $request->subject = 'Message from portfolio';
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail');
    }
}
