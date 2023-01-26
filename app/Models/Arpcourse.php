<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arpcourse extends Model
{
    use HasFactory;
    protected $fillable=['name','student_id','math1','arabic1','math2','arabic2','math3','arabic3','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
}
