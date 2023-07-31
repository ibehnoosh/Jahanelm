<?php
namespace App\Http\Livewire\Users;

use App\Models\BasicInfo\Center;
use App\Models\Users\Student;
use Livewire\Component;

class StudentLive extends Component
{
    public $name;
    public $family;
    public $mobile;
    public $center_id;
    public $editingStudent;

    protected $rules = [
        'name' => 'required|string|max:191',
        'family' => 'required|string|max:191',
        'mobile' => 'required|string|max:15',
        'center_id' => 'required|exists:centers,id',
    ];

    public function render()
    {
        $students = Student::all();
        $centers = Center::all();

        return view('livewire.Users.student', compact('students', 'centers'));
    }

    public function create()
    {
        $this->resetFields();
    }

    public function edit(int $id)
    {
        $student = Student::findOrFail($id);
        $this->editingStudent = $student->id;
        $this->name = $student->name;
        $this->family = $student->family;
        $this->mobile = $student->mobile;
        $this->center_id = $student->center_id;
    }

    public function store()
    {
        $this->validate();

        Student::create([
            'id' => Student::generateUniqueCode(),
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'center_id' => $this->center_id,
            'gender' => 2,
            'password' => '123456'
        ]);

        $this->resetFields();
    }

    public function update()
    {
        $this->validate();

        $student = Student::findOrFail($this->editingStudent);
        $student->update([
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'center_id' => $this->center_id,
        ]);

        $this->resetFields();
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
    }

    private function resetFields()
    {
        $this->editingStudent = null;
        $this->name = '';
        $this->family = '';
        $this->mobile = '';
        $this->center_id = null;
    }
}
