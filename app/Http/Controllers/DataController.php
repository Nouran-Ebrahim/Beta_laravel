<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\MailableName;
// require "vendor/autoload.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

class DataController extends Controller
{
    //


    public function create()
    {
        return view('register');
    }
    public function store(Request $req)
    {


        if ($req->has('submit')) {
            $result = uniqid();
            $code=substr(md5($result), 0, 8);
            $email=$req->email;
            $name=$req->name;
            echo ($code);
            Student::create([
                'email' => $req->email,
                'name' => $req->name,
                'mobile' => $req->mobile,
                'parent_mobile' => $req->parent_mobile,
                'phone' => $req->phone,
                'gender' => $req->gender,
                'city' => $req->city,
                'school' => $req->school,
                'grade' => $req->grade,
                'type' => $req->type,
                'code' => $code
            ]);
            Mail::to($email)->send(new MailableName($code,$name)) ;

            return view('joinus');
        }

    }

    public function check(Request $req){
        if ($req->has('submit')) {

        }

    }
}
