<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    //
    public function getAllUser(){
        $user = DB::table('user')->get();
        return view('about',[
            'user'=>$user
        ]);

    }

    
    

}
