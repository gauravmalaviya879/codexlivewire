<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hookprofile extends Component
{   
    public $name;
    public $count;

    function mount(){
        $this->name = "mount name";
    }
    // click event
    // function hydrate(){
    //     $this->count++;
    // }
    // input text 
    function updated(){
        $this->count++;
    }
    function updateName($name){
        $this->name =$name;
    }

    public function render()
    {
        return view('livewire.hookprofile');
    }
}
