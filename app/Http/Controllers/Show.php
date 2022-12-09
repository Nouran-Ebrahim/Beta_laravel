<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Show extends Controller{
    public function show(Request $request){
       $id = $request->id;
       $sub = $request->sub;
       return view('thanwy.show',[
        'id'=>$id,
        'sub'=>$sub
       ]);
     }
    }