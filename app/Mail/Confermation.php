<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Confermation extends Mailable
{
    use Queueable, SerializesModels;
    public $id;
    public $subjectName;
    public $studentname;
    public $sec;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id,$subjectName,$studentname,$sec)
    {
        $this->id=$id;
        $this->subjectName=$subjectName;
        $this->studentname=$studentname;
       $this->sec=$sec;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {           
         return $this->from('beta.education2022@gmail.com')->subject('Beta Education registration')->view('confermation');

    }
}
