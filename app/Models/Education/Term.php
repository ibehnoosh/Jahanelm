<?php

namespace App\Models\Education;

use App\Models\Accounting\Discount;
use App\Models\BasicInfo\Center;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function termState()
    {
        return $this->belongsTo(TermState::class, 'term_states_id');
    }

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }
}
