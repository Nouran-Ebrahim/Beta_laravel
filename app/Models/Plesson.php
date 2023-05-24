<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plesson extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
    public function unit()
    {
        return $this->belongsTo(Punit::class);
    }
}
