<?php

namespace App\Models\BasicInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'comment', 'is_active','has_private'];

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }
}
