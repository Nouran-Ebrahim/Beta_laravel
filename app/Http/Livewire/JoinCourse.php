<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;

class JoinCourse extends Component
{
    
    public function joincourse($id){
       dd($id);
        
    }
    
    public function render()
    {   
        return view('livewire.join-course');
    }
}
