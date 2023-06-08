<?php

namespace App\Http\Controllers;

use App\Models\Plesson;
use App\Models\Student;
use App\Models\Arth1coure;
use App\Models\Enth1coure;
use App\Models\Arth2course;
use App\Models\Arth3course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
use App\Mail\Confermation;
use Illuminate\Support\Facades\Session;

class Thanawy extends Controller
{
    public function subscribe_firstcourse()
    {
        $id = request('id');
        $subject = request('subject');
        $lang = request('lang');
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;

            if ($lang === 'en') {
                if (!Enth1coure::where('student_id', Session::get('id'))->exists()) {
                    Enth1coure::create([
                        'name' => $studentname,
                        'student_id' => Session::get('id'),
                    ]);
                } else {
                    echo '<script>alert("faild to join this course please try again")</script>';
                }
            } elseif ($lang === 'ar') {
                if (!Arth1coure::where('student_id', Session::get('id'))->exists()) {
                    Arth1coure::create([
                        'name' => $studentname,
                        'student_id' => Session::get('id'),
                    ]);
                } else {
                    echo '<script>alert("تعذر تسجيل الماده حاول مره اخره")</script>';
                }
            } else {
                echo '<script>alert("تعذر الاتصال حاول مره اخره")</script>';
            }

            $data_row = Arth1coure::where('student_id', '=', Session::get('id'))->first();
            $data_row_en = Enth1coure::where('student_id', '=', Session::get('id'))->first();
            //$subdata = $subject . $id;
            try {
                if ($data_row && $lang == 'ar') {
                    if ($data_row->$subject == 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 11));
                        Arth1coure::where("student_id", Session::get('id'))->update([$subject => "waiting"]);

                        return redirect()->route('thanwy12-courses', [
                            'id' => $id,
                            'subject' => $subject,

                        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    } elseif($data_row->$subject == 'waiting') {
                        return redirect()->route('thanwy12-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم تسجيل طلبك و جارى التفعيل"]);
                    } elseif($data_row->$subject == 'open') {
                        return redirect()->route('thanwy12-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                    }
                } elseif ($data_row_en && $lang == 'en') {

                    if ($data_row_en->$subject == 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 11));
                        Enth1coure::where("student_id", Session::get('id'))->update([$subject => "waiting"]);

                        return redirect()->route('thanwy12-courses', [
                            'id' => $id,
                            'subject' => $subject,

                        ])->with(['successth' => "sucssfully join the course please check your email"]);
                    } else {
                        return redirect()->route('thanwy12-courses', [
                            'id' => $id,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "already joinning please wait for comfermation"]);
                    }
                }
            } catch (\Swift_TransportException $transportExp) {
                //echo $transportExp->getMessage();
                return redirect()->back()->with(['success' => " من فضلك تأكد بأتصالك بالانترنت وحاول مره اخري"]);
            }
        }
    }
    public function subscribe_thanwy()
    {
        $id = request('id');
        $subject = request('subject');
        $lang = request('lang');
        $sub=request('sub');

        //dd($lang);
        if (Session::has('id')) {
            $data = Student::where('id', '=', Session::get('id'))->first();
            $studentname = $data->name;
            
            try {
                //  زرار الاشتراك للصف الثانى الثانوى ادبى عربى 
                if ($id==2 && $sub==1 && $lang == 'ar') {
                    if (!Arth2course::where('student_id', Session::get('id'))->exists()) {
                        Arth2course::create([
                            'name' => $studentname,
                            'student_id' => Session::get('id'),
                        ]);
                    }
                     $data_row = Arth2course::where('student_id', '=', Session::get('id'))->first();
                    //  dd($req);
                    if ($data_row->$subject== 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 'ادبي'));
                        Arth2course::where("student_id", Session::get('id'))->update([$subject => "waiting"]);
                        
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,

                        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    }
                     elseif($data_row->$subject == 'waiting') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                            ])->with(['successth' => "تم تسجيل طلبك و جارى التفعيل"]);
                     }elseif($data_row->$subject == 'open') {
                            // echo "7777";die;
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                     }else {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "سيتم التحقق من البيانات"]);
                    }
                }
                //  زرار الاشتراك للصف الثانى الثانوى علمى عربى 
                elseif ($id==2 && $sub==2 && $lang == 'ar') {
                    if (!Arth2course::where('student_id', Session::get('id'))->exists()) {
                        Arth2course::create([
                            'name' => $studentname,
                            'student_id' => Session::get('id'),
                        ]);
                    }
                     $data_row = Arth2course::where('student_id', '=', Session::get('id'))->first();
                    //  dd($req);
                    if ($data_row->$subject== 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 'علمي'));
                        Arth2course::where("student_id", Session::get('id'))->update([$subject => "waiting"]);
                        
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,

                        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    }
                     elseif($data_row->$subject == 'waiting') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                            ])->with(['successth' => "تم تسجيل طلبك و جارى التفعيل"]);
                     }elseif($data_row->$subject == 'open') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                     }else {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "سيتم التحقق من البيانات"]);
                    }
                }
                //  زرار الاشتراك للصف الثالث الثانوى ادبى عربى 
                elseif ($id==3 && $sub==1 && $lang == 'ar') {
                    if (!Arth3course::where('student_id', Session::get('id'))->exists()) {
                        Arth3course::create([
                            'name' => $studentname,
                            'student_id' => Session::get('id'),
                        ]);
                        // dd(request());die;
                    }
                     $data_row = Arth3course::where('student_id', '=', Session::get('id'))->first();
                    if ($data_row->$subject== 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, 'ادبي'));
                        Arth3course::where("student_id", Session::get('id'))->update([$subject => "waiting"]);
                        
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,

                        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    }
                     elseif($data_row->$subject == 'waiting') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                            ])->with(['successth' => "تم تسجيل طلبك و جارى التفعيل"]);
                     }elseif($data_row->$subject == 'open') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                     }else {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "سيتم التحقق من البيانات"]);
                    }
                }
                //  زرار الاشتراك للصف الثالث الثانوى علمى عربى 
                elseif ($id==3 && ($sub==3||$sub==4) && $lang == 'ar') {
                    if($sub==3){
                    $sec='علمي رياضه';
                    }elseif($sub==4){
                    $sec='علمي علوم';
                    }
                    if (!Arth3course::where('student_id', Session::get('id'))->exists()) {
                        Arth3course::create([
                            'name' => $studentname,
                            'student_id' => Session::get('id'),
                        ]);
                        // dd(request());die;
                    }
                     $data_row = Arth3course::where('student_id', '=', Session::get('id'))->first();
                    if ($data_row->$subject== 'closed') {
                        Mail::to($data->email)->send(new Confermation($id, $subject, $studentname, $sec));
                        Arth3course::where("student_id", Session::get('id'))->update([$subject => "waiting"]);
                        
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,

                        ])->with(['successth' => "تم تسجيل طلبك بنجاح من فضلك افحص الاميل"]);
                    }
                     elseif($data_row->$subject == 'waiting') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                            ])->with(['successth' => "تم تسجيل طلبك و جارى التفعيل"]);
                     }elseif($data_row->$subject == 'open') {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "تم الاشتراك و فتح الكورس ابدا الان"]);
                     }else {
                        return redirect()->route('thanwy', [
                            'id' => $id,
                            'sub'=> $sub,
                            'subject' => $subject,
                            'sent' => 'done',
                        ])->with(['successth' => "سيتم التحقق من البيانات"]);
                    }
                }
           
            } 
            catch (\ErrorException $err) {
                echo $err->getMessage();
                return redirect()->back()->with(['success' => " من فضلك تأكد بأتصالك بالانترنت وحاول مره اخري"]);
            }
        }

        
    }
    public function thcoursedetails()
    {
        $id = request('id');
        $subject = request('subject');
        $sub=request('sub');
        $lang=request('lang');

        //$lang = request('lang');
        if (Session::has('id')) {
            $subdata = $subject;
            // عرض فيديوهات المادة للصف الاول الثانوى 
            if($sub==1 && $lang=='ar' && $id==1){
                $data_row = Arth1coure::where('student_id', '=', Session::get('id'))->first();
            $status = $data_row->$subdata;
            }
            // عرض فيديوهات المادة للصف الثانى الثانوى 
            elseif(($sub==1||$sub==2) && $lang=='ar' && $id==2){
                $data_row = Arth2course::where('student_id', '=', Session::get('id'))->first();
            $status = $data_row->$subdata;
            }
            //  عرض فيديوهات المادة للصف الثالث الثانوى 
            elseif(($sub==1||$sub==3 || $sub==4) && $lang=='ar' && $id==3){
                $data_row = Arth3course::where('student_id', '=', Session::get('id'))->first();
                $status = $data_row->$subdata;
                }
            else{
            $status = 'closed';
            // dd($sub,$lang,$id);die;

            }
            // dd($status);die;
            return redirect()->route('details_th', [
                'id' => $id,
                'subject' => $subject,
                'status' => $status,
                
             
            ]);

        }
       
    }
}
