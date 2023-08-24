<?php

namespace App\Models\Accounting;

use App\Models\BasicInfo\Center;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankAccount extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function center(): BelongsTo
    {
        return $this->belongsTo(Center::class);
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}
