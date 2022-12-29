<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['email','name','mobile','parent_mobile','phone','gender','city','school','grade','type','created_at','updated_at','code'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
}
