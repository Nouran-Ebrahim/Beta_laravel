<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable=['all_unit','all_lesson','link','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;

}
