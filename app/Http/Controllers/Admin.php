<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Arth1coure;
use App\Models\Enth1coure;
use App\Models\Arth2course;
use App\Models\Arth3course;
use App\Models\Enpcourse;
use App\Models\Plesson;
use App\Models\Arpcourse;
use App\Models\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
use App\Mail\Confermation;
use Attribute;
use Illuminate\Support\Facades\Session;

class Admin extends Controller
{
    public function admin()
    {
        $FetchData = Arpcourse::all();
        $thanwy1 = Arth1coure::all();
        //dd($FetchData);
        return view('admin', [
            'FetchData' => $FetchData,
            'thanwy1' => $thanwy1
        ]);
    }
    public function adminstore(Request $req)
    {
        $selectedid = $req->id;
        $course_data = Arpcourse::where('student_id', '=', $selectedid)->first();
        $col_num = DB::getSchemaBuilder()->getColumnListing('arpcourses');

        return view('coursestatus', [
            'selectedid' => $selectedid,
            'course_data' => $course_data,
            'col_names' => $col_num
        ]);
    }

    public function change_status(Request $req)
    {

        $user = Arpcourse::where('student_id', '=', $req->st_id)->first();

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

        return redirect()->back();
    }
    public function  sub_links(Request $req)
    {
        $link=[];
        if ($req->level) {
            $link=Link::where('sub_name',$req->sub_name)->get()->all();
        }else{
            $link=['empaty'];
        }
        
    
        return view('subLinks',[
            'link'=>$link,
            'unit'=>'2',
            'lesson'=>'2',
        ]);
    }
   
}
