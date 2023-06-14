<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arth2course extends Model
{
    use HasFactory;
    protected $fillable=['name','student_id',
    'arabic','philosophyLogic','algebratrigonometry',
    'analyticalengineering','history','geography','physics',
    'chemistry','biology','english','frensh','italian','german','spanish',
    'created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
}
