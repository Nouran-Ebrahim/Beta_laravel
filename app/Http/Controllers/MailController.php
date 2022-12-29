<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
class MailController extends Controller
{
    //
    // public function sendmail(){
    //     Mail::to('beta.eduaction@gmail.com')->send(new MailableName()) ;
    //     return view('index');
    // }
}
