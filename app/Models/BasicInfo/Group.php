<?php

namespace App\Models\BasicInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'comment', 'is_active', 'order','category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function levels(): HasMany
    {
        return $this->hasMany(Level::class);
    }
}
