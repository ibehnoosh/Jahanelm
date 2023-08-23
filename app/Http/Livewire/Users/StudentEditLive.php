<?php

namespace App\Http\Livewire\Users;

use App\Models\Users\Student;
use Livewire\Component;

class StudentEditLive extends Component
{
    public $studentId;
    public $name;
    public $name_en;
    public $family;
    public $family_en;
    public $meli;
    public $passport;
    public $father;
    public $father_en;
    public $mother;
    public $gender;
    public $city;
    public $father_mobile;
    public $mother_mobile;
    public $tel;
    public $address;
    public $email;
    public $card;
    public $mobile;
    public $birth;
    public $birth_en;
    public $center_id;
    public $editing = false;

    protected $rules = [
        'name' => 'required|string|max:191',
        'family' => 'required|string|max:191',
        'name_en' => 'nullable|string|max:191',
        'family_en' => 'nullable|string|max:191',
        'meli' => 'nullable|string|max:10|unique:students',
        'passport' => 'nullable|string|max:10|unique:students',
        'father' => 'nullable|string|max:191',
        'father_en' => 'nullable|string|max:191',
        'mother' => 'nullable|string|max:191',
        'city' => 'nullable|string|max:191',
        'father_mobile' => 'nullable|string|max:10',
        'mother_mobile' => 'nullable|string|max:10',
        'tel' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:191',
        'email' => 'nullable|string|max:191|email',
        'card' => 'nullable|string|max:16',
        'mobile' => 'required|string|max:10',
        'birth' => 'nullable|string|max:4',
        'birth_en' => 'nullable|string|max:4',
    ];

    public function mount($studentId)
    {
        $this->studentId = $studentId;
        $student = Student::find($studentId);

        if ($student) {
            $this->name = $student->name;
            $this->name_en = $student->name_en;
            $this->family = $student->family;
            $this->family_en = $student->family_en;
            $this->meli = $student->meli;
            $this->passport = $student->passport;
            $this->father = $student->father;
            $this->father_en = $student->father_en;
            $this->mother = $student->mother;
            $this->gender = $student->gender;
            $this->city = $student->city;
            $this->father_mobile = $student->father_mobile;
            $this->mother_mobile = $student->mother_mobile;
            $this->tel = $student->tel;
            $this->address = $student->address;
            $this->email = $student->email;
            $this->card = $student->card;
            $this->mobile = $student->mobile;
            $this->birth = $student->birth;
            $this->birth_en = $student->birth_en;
        }
    }

    public function render()
    {
        return view('livewire.Users.student_edit');
    }
    public function updateStudent()
    {
        $this->validate();

        $student = Student::findOrFail($this->studentId);
        $student->update([
            'name' => $this->name,
            'name_en' => $this->name_en,
            'family' => $this->family,
            'family_en' => $this->family_en,
            'meli' => $this->meli,
            'passport' => $this->passport,
            'father' => $this->father,
            'father_en' => $this->father_en,
            'mother' => $this->mother,
            'city' => $this->city,
            'father_mobile' => $this->father_mobile,
            'mother_mobile' => $this->mother_mobile,
            'tel' => $this->tel,
            'address' => $this->address,
            'email' => $this->email,
            'card' => $this->card,
            'mobile' => $this->mobile,
            'birth' => $this->birth,
            'birth_en' => $this->birth_en,
        ]);

        session()->flash('success', 'Student information updated successfully.');

    }
    public function backSearch()
    {
        return redirect()->route('studentSearch');
    }

}

