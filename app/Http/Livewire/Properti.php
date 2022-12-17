<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properti extends Component
{   public $msg;
    public $blog ="my name gaurav";

     function mount(){
        $this->msg = "good mount function";
     }

    function updateMsg($name){
        $this->blog =$name;
    }

    public function render()
    {  
        return view('livewire.properti');
    }
}
