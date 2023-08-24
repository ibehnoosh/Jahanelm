<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermState extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'color',
    ];

    public function Terms()
    {
        return $this->hasMany(Term::class);
    }
}
