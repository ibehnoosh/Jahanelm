<?php
// app/Http/Livewire/StudentSearch.php

namespace App\Http\Livewire\Users;

use App\Models\Users\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentSearchLive extends Component
{
    use WithPagination;

    public $name;
    public $family;
    public $mobile;
    public $meli;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $students = $this->searchStudents();

        return view('livewire.Users.student_search', compact('students'));
    }

    public function searchStudents()
    {
        $query = Student::query();

        if ($this->name) {
            $query->where('name', 'like', '%' . $this->name . '%');
        }

        if ($this->family) {
            $query->where('family', 'like', '%' . $this->family . '%');
        }

        if ($this->mobile) {
            $query->where('mobile', 'like', '%' . $this->mobile . '%');
        }

        if ($this->meli) {
            $query->where('meli', 'like', '%' . $this->meli . '%');
        }

        return $query->limit(500)->paginate(25);
    }

    public function resetPage()
    {
        $this->resetPage();
    }

}
