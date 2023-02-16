<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enpcourse extends Model
{
    use HasFactory;
    protected $fillable=['name','student_id','arabic1','arabic2','arabic3','math1','math2','math3','english1','english2','english3','science1','science2','science3','social1','social2','social3','frensh1','frensh2','frensh3','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
}
