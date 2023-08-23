<?php


namespace App\Http\Livewire\Users;

use App\Models\Users\Teacher;
use Livewire\Component;

class TeacherLive extends Component
{
    public
        $teachers,
        $name,
        $family,
        $mobile,
        $father,
        $address,
        $tel,
        $selectedTeacher,
        $updateMode = false;

    protected $rules = [
        'name' => 'required|string|max:191',
        'family' => 'required|string|max:191',
        'mobile' => 'required|string|max:10',
        'father' => 'nullable|string|max:191',
        'tel' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:191',
    ];

    public function render()
    {
        $this->teachers = Teacher::all();
        return view('livewire.Users.teachers');
    }

    public function create()
    {
        $this->validate();

        Teacher::create([
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'father' => $this->father,
            'tel' => $this->tel,
            'address' => $this->address,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->selectedTeacher = Teacher::find($id);
        $this->name = $this->selectedTeacher->name;
        $this->family = $this->selectedTeacher->family;
        $this->mobile = $this->selectedTeacher->mobile;
        $this->father = $this->selectedTeacher->father;
        $this->tel = $this->selectedTeacher->tel;
        $this->address = $this->selectedTeacher->address;
    }

    public function update()
    {
        $this->validate();

        $this->selectedTeacher->update([
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'father' => $this->father,
            'tel' => $this->tel,
            'address' => $this->address,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Teacher::find($id)->delete();
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->family = '';
        $this->mobile = '';
        $this->father = '';
        $this->tel = '';
        $this->address = '';
        $this->updateMode = false;
    }
}
