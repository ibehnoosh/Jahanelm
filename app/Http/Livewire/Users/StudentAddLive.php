<?php
namespace App\Http\Livewire\Users;

use App\Models\BasicInfo\Center;
use App\Models\Users\Student;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class StudentAddLive extends Component
{
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
        'center_id' => 'required|exists:centers,id',
        'name_en' => 'nullable|string|max:191',
        'family_en' => 'nullable|string|max:191',
        'meli' => 'nullable|string|max:10|unique:students',
        'passport' => 'nullable|string|max:10|unique:students',
        'father' => 'nullable|string|max:191',
        'father_en' => 'nullable|string|max:191',
        'mother' => 'nullable|string|max:191',
        'gender' => 'required|string|max:1',
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

    public function render()
    {
        $centers = Center::all();
        return view('livewire.Users.student_add', compact('centers'));
    }

    public function store()
    {
        $this->validate();
        $studentId = Student::generateUniqueCode();
        Student::create([
            'id' => $studentId,
            'name' => $this->name,
            'name_en' => $this->name_en,
            'family' => $this->family,
            'family_en' => $this->family_en,
            'meli' => $this->meli,
            'passport' => $this->passport,
            'father' => $this->father,
            'father_en' => $this->father_en,
            'mother' => $this->mother,
            'gender' => $this->gender,
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
            'center_id' => $this->center_id,
            'password' => Hash::make($this->mobile)
        ]);

        $this->emit('success', 'Student created successfully. Student ID: ' . $studentId);

        $this->clearForm();
    }

    public function clearForm()
    {
        $this->name = '';
        $this->name_en = '';
        $this->family = '';
        $this->family_en = '';
        $this->meli = '';
        $this->passport = '';
        $this->father = '';
        $this->father_en = '';
        $this->mother = '';
        $this->gender = '';
        $this->city = '';
        $this->father_mobile = '';
        $this->mother_mobile = '';
        $this->tel = '';
        $this->address = '';
        $this->email = '';
        $this->card = '';
        $this->mobile = '';
        $this->birth = '';
        $this->birth_en = '';
    }

}
