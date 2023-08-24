<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }
}
