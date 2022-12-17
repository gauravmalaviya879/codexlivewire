<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\group;
class Savegroup extends Component
{
    public $name;
    public $description;
    public function render()
    {
        return view('livewire.savegroup');
    }



// save group 
public function saveGroup(){

    $this->validate([
        'name'=>'required',
        'description'=>'required',
      ]);

  $data = new group();
  $data->name =$this->name;
  $data->description=$this->description;
  $data->save();
  session()->flash('success','data submited succsess');
   return redirect()->to('/grouplist');
// dd($this->description,$this->name);

}
}
