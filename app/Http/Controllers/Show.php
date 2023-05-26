<?php

namespace App\Http\Controllers;

use App\Models\Plesson;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Show extends Controller
{
  public function show( )
  {
    $id = request('id') ;
    $sub = request('sub');
    return view('thanwy', [
      'id' => $id,
      'sub' => $sub
    ]);
  }
  public function prep()
  {
    $id = request('id');
    return view('courses', [
      'id' => $id,

    ]);
  }
  public function details()
  {
    $id = request('id');
    $subject = request('subject');
    $status=request('status');
    $plesseons = Plesson::where("unit_id",1)->get();
    return view('pcoursedetails', [
      'id' => $id,
      'subject'=>$subject,
      'status'=>$status,
      'plessons'=>$plesseons
    ]);
  }
  public function first()
  {
    $id = request('id');
    return view('thanwy', [
      'id' => $id,
    ]);
  }
  public function therd()
  {
    $id = request('id');
    return view('start', [
      'id' => $id,
    ]);
  }
}
