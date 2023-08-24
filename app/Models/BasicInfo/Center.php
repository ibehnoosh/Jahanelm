<?php

namespace App\Models\BasicInfo;

use App\Models\Accounting\BankAccount;
use App\Models\Education\Term;
use App\Models\Users\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

    public function Students()
    {
        return $this->hasMany(Student::class);
    }
    public function Terms()
    {
        return $this->hasMany(Term::class);
    }
}
