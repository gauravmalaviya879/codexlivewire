<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Userprofile extends Component
{
    public function render()
    {
         $data = ['name'=>'sager','password'=>'1234','email'=>'sagar1234@gmail.com'];

        return view('livewire.userprofile',['data'=>$data]);
    }
}
