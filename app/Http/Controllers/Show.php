<?php

namespace App\Http\Controllers;

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

  public function firstsecond()
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
