<?php

namespace App\Http\Controllers;

use App\Models\Enpcourse;
use App\Models\Student;
use App\Models\Arpcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
use App\Mail\Confermation;
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
        $lan=request('lan');
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;
            if(!Arpcourse::where('student_id',Session::get('id'))->exists()){
                Arpcourse::create([
                    'name' => $studentname,
                    'student_id' => Session::get('id'),
                ]);
            }
            
            // if($lan==='en'){
            //     if(!Enpcourse::where('student_id',Session::get('id'))->exists()){
            //         Enpcourse::create([
            //             'name' => $studentname,
            //             'student_id' => Session::get('id'),
            //         ]);
            //     }
            // }
            

            try {
                $data_row = Arpcourse::where('student_id', '=', Session::get('id'))->first();
                //$data_row_en = Enpcourse::where('student_id', '=', Session::get('id'))->first();
                $subdata = $subject . $id;
                $status_sub = $data_row->$subdata;
                //$status_sub_en = $data_row_en->$subdata;
                if ($data_row) {
                    if ($status_sub == 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 0));
                        Arpcourse::where("student_id", Session::get('id'))->update([$subdata => "waiting"]);
    
                        return  redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            
                        ])->with(['success' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
    
                    } else {
                        return  redirect()->route('prep-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['success' => "تم تسجيل طلبك و جارى التفعيل"]);
                    }
                }
                // elseif($data_row_en){
                //     if($status_sub_en == 'closed'){
                //         Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 0));
                //         Enpcourse::where("student_id", Session::get('id'))->update([$subdata => "waiting"]);
    
                //         return  redirect()->route('prep-courses', [
                //             'id' => $id,
                //             'subject' => $subject,
                //             'lan'=>$lan
                //         ])->with(['success' => "sucssfully join the course please check your email"]);
                //     }else{
                //         return  redirect()->route('prep-courses', [
                //             'id' => $id,
                //             'subject' => $subject,
                //             'sent' => 'done',
                //         ])->with(['success' => "already joinning please wait for comfermation"]);
                //     }
                // }

            } catch (\Swift_TransportException $transportExp) {
                //echo $transportExp->getMessage();
                return  redirect()->back()->with(['success' => " من فضلك تأكد بأتصالك بالانترنت وحاول مره اخري"]);
            }
        }
    }


    public function subscribe_firstcourse()
    {
        $id = request('id');
        $subject = request('subject');
        // $subdata=$subject.$id;
        // $course_data = Arpcourse::where('student_id', '=',  $id)->first();

        // $status_sub=$course_data->$subdata;

        // $sub = request('sub');
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;
            Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 11));
        }
        return  redirect()->route('thanwy12-courses', [
            'id' => $id,
            'subject' => $subject
        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
    }
    public function subscribe_thanwy()
    {
        $id = request('id');
        $subject = request('subject');
        $sec = request('sec');
        $sub = request('sub');
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;
            Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, $sec));
        }

        return  redirect()->route('thanwy', [
            'id' => $id,
            'subject' => $subject,
            'sec' => $sec,
            'sub' => $sub
        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
    }
    public function admin()
    {
        $FetchData = Arpcourse::all();
        //dd($FetchData);
        return view('admin', [
            'FetchData' => $FetchData,
        ]);
    }
    public function adminstore(Request $req)
    {
        $selectedid = $req->id;
        $course_data = Arpcourse::where('student_id', '=',  $selectedid)->first();
        $col_num = DB::getSchemaBuilder()->getColumnListing('arpcourses');

        return view('coursestatus', [
            'selectedid' => $selectedid,
            'course_data' => $course_data,
            'col_names' => $col_num
        ]);
    }

    public function change_status(Request $req)
    {

        $user = Arpcourse::where('student_id', '=',  $req->st_id)->first();

        foreach ($req->all() as $key => $val) {
            if ($key == "st_id" || $key == "_token") {
                continue;
            }
            $user->update(
                [
                    $key => $val
                ]
            );
        }

        return  redirect()->back();
    }
}
