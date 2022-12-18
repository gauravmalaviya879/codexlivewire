<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;
use Livewire\WithFileUploads;
use Session;
use App\Models\group;

class Grouplist extends Component
{

    use WithFileUploads;
    // public $grouplist;
    public $name, $group_id, $logo, $description, $logox, $descriptionx, $namex;
    public $updateMode = false;

    public function resetData()
    {
        $this->name = '';
        $this->description = '';
    }

    public function render()
    {

        $grouplist = group::paginate('10');
        return view('livewire.grouplist', ['grouplist' => $grouplist]);
    }
    public function saveGroup()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ]);
        $data = new group();
        $data->name = $this->name;
        $data->logo = $this->logo->store('uploads');
        $data->description = $this->description;
        $data->save();
        session()->flash('success', 'data submited succsess');
        //   dd($this->description,$this->logo);
        return redirect()->to('/home');
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $data = group::where('group_id', $id)->first();
        $this->group_id  = $id;
        $this->logox = $data->logo;
        $this->namex = $data->name;
        $this->descriptionx = $data->description;
    }
    public function delete($id)
    {
        $removedata =  group::where('group_id', $id);
        $imagpath = $removedata->first();
        if(file_exists(storage_path('/app/public/' . $imagpath->logo))){
            unlink(storage_path('/app/public/' . $imagpath->logo));
        }
        $removedata->delete();
        return redirect()->to('/home');
    }

    public function update(Request $req)
    {
        $this->validate([
            'namex' => 'required',
            'descriptionx' => 'required',
            'logox' => 'required',
        ]);

        if ($this->group_id) {
            $data = group::where('group_id', $this->group_id);
            $groupdata = $data->first();
            if(file_exists(storage_path('/app/public/' . $groupdata->logo))){
                unlink(storage_path('/app/public/' . $groupdata->logo));
            }
           
            $data->update([
                'name' => $this->namex,
                'description' => $this->descriptionx,
                'logo' => $this->logox->store('uploads'),
            ]);
            $this->updateMode = false;
            session()->flash('success', 'group Updated Successfully.');
            $this->resetData();
            return redirect()->to('/home');
            // $this->resetInputFields();
        }
    }
}
