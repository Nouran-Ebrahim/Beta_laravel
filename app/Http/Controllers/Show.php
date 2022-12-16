<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Show extends Controller
{
  public function show(Request $request)
  {
    $id = $request->id;
    $sub = $request->sub;
    return view('thanwy', [
      'id' => $id,
      'sub' => $sub
    ]);
  }
  public function prep(Request $request)
  {
    $id = $request->id;
    return view('courses', [
      'id' => $id,
      
    ]);
  }

  public function firstsecond(Request $request)
  {
    $id = $request->id;
    return view('thanwy', [
      'id' => $id,
    ]);
  }
  public function therd(Request $request)
  {
    $id = $request->id;
    return view('start', [
      'id' => $id,
    ]);
  }
}
