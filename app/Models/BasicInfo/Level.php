<?php

namespace App\Models\BasicInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'comment', 'is_active', 'is_free', 'order','group_id'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
