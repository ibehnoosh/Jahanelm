<?php

namespace App\Models\BasicInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassState extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
}
