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
use Illuminate\Support\Facades\Storage;

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
            $unit=0;
            $lesson=0;
            $status='not exist';
            // dd($req->sub_name,$req->level);
        if ($req && $req->sub_name != 'null' && $req->level != 'null') {
            $link=Link::where(['sub_name'=>$req->sub_name , 'level' =>$req->level])->get()->all();
            if ($link!=[]) {
                $status='exist';
                $unit=$link[1] -> all_unit;
                $lesson=$link[1] -> all_lesson;
            }
        }
        
    
    
        return view('subLinks',[
            'link'=>$link,
            'unit'=>$unit,
            'lesson'=>$lesson,
            'status'=> $status,
        ]);
    }
    public function  edit_link(Request $req)
    {
        // dd($req->link);
        
        if ($req->link != 'null') {
        Link::where('id',$req->id)->update(['link' => $req->link]);
        }
        $linkEdit=Link::where('id',$req->id)->get()->all();
        $link=Link::where('sub_name',$linkEdit[0]->sub_name)->get()->all();
        if ($link!=[]) {
            $status='exist';
            $unit=$link[1] -> all_unit;
            $lesson=$link[1] -> all_lesson;
        }
        return view('subLinks',[
            'link'=>$link,
            'unit'=>$unit,
            'lesson'=>$lesson,
            'status'=> $status,
        ]);
        
    }
    
}
