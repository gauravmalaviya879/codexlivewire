<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Users extends Component
{ 
    public $names =['gaurav','lishan','god'];
    public function render()
    {
        return view('livewire.users');
    }
}
