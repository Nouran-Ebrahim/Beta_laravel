<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailableName extends Mailable
{
    use Queueable, SerializesModels;
    public $code;
    public $name;
    /**
     * Create a new message instance.
     *
     * 
     * @return void
     */
    public function __construct($code,$name)
    {
        $this->code=$code;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('beta.eduaction@gmail.com')->subject('Beta Education sign in code')->view('signup');
    }
}
