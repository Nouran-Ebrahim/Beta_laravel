<?php

namespace App\Http\Controllers;

use App\Models\Enpcourse;
use App\Models\Plesson;
use App\Models\Student;
use App\Models\Arpcourse;
use App\Models\Arth1coure;
use App\Models\Enth1coure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
use App\Mail\Confermation;
use App\Models\Arth2course;
use Illuminate\Support\Facades\Session;

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
            $code = substr(md5($result), 0, 8);
            $email = $req->email;
            $name = $req->name;
            // echo ($code);
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
            Mail::to($email)->send(new MailableName($code, $name));

            return redirect('joinus');
        } else {
            return back();
        }
    }
    public function loginstu(Request $req)
    {
        $student = Student::where('email', '=', $req->email)->first();

        if ($student) {
            if ($student->code === $req->code) {
                $req->session()->put('id', $student->id);
                return redirect('/');
            } else {
                return back();
            }
        } else {
            return back();
        }
    }
    // show student name in home page
    public function hello()
    {
        $data = array();
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            return view('index', compact('data'));
        } else {
            return view('index');
        }
    }





    public function subscribe_course(Request $req)
    {
        $id = request('id');
        $subject = request('subject');
        $lang = request('lang');
        //dd($lang);
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;
            if ($lang === 'en') {
                if (!Enpcourse::where('student_id', Session::get('id'))->exists()) {
                    Enpcourse::create([
                        'name' => $studentname,
                        'student_id' => Session::get('id'),
                    ]);
                } else {
                    echo '<script>alert("faild to join this course please try again")</script>';
                }
            } elseif ($lang === 'ar') {
                if (!Arpcourse::where('student_id', Session::get('id'))->exists()) {
                    Arpcourse::create([
                        'name' => $studentname,
                        'student_id' => Session::get('id'),
                    ]);
                } else {
                    echo '<script>alert("تعذر تسجيل الماده حاول مره اخره")</script>';
                }
            } else {
                echo '<script>alert("تعذر الاتصال حاول مره اخره")</script>';
            }
            $data_row = Arpcourse::where('student_id', '=', Session::get('id'))->first();
            $data_row_en = Enpcourse::where('student_id', '=', Session::get('id'))->first();
            $subdata = $subject . $id;
            // dd($subdata);
            try {
                if ($data_row && $lang == 'ar') {
                    //  dd($req);
                    if ($data_row->$subdata == 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 0));
                        Arpcourse::where("student_id", Session::get('id'))->update([$subdata => "waiting"]);

                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,

                        ])->with(['success' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    } elseif ($data_row->$subdata == 'waiting') {
                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "تم تسجيل طلبك و جارى التفعيل"]);
                    } elseif ($data_row->$subdata == 'open') {
                        // echo "7777";die;
                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                    } else {
                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "done"]);
                    }
                } elseif ($data_row_en && $lang == 'en') {

                    if ($data_row_en->$subdata == 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 0));
                        Enpcourse::where("student_id", Session::get('id'))->update([$subdata => "waiting"]);

                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,

                        ])->with(['success' => "sucssfully join the course please check your email"]);
                    } elseif ($data_row_en->$subdata == 'waiting') {
                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "already joinning please wait for comfermation"]);
                    } elseif ($data_row_en->$subdata == 'open') {
                        return redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "You are joined already start now"]);
                    }
                }
            } catch (\ErrorException $err) {
                echo $err->getMessage();
                return redirect()->back()->with(['success' => " من فضلك تأكد بأتصالك بالانترنت وحاول مره اخري"]);
            }
        }
    }

    public function pcoursedetails()
    {
        $id = request('id');
        $subject = request('subject');

        //$lang = request('lang');
        if (Session::has('id')) {
            $subdata = $subject . $id;
            $data_row = Arpcourse::where('student_id', '=', Session::get('id'))->first();
            //dd($lang);
            $status = $data_row->$subdata;
            return redirect()->route('details', [
                'id' => $id,
                'subject' => $subject,
                'status' => $status,

            ]);

        }
        // foreach ($plesseons as $lesson) {
        //     echo $lesson->unit->unit_name;
        // }
    }

   
}
