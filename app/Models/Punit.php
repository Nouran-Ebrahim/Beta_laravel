<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punit extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
    public function lessons()
    {
        return $this->hasMany(Plesson::class);
    }
}
