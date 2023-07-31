<?php

namespace App\Models\Users;

use App\Models\BasicInfo\Center;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    protected static function generateUniqueCode(): int
    {
        $year = Verta::today()->format('Y')-1400+10;
        $month = Verta::today()->format('m');
        $yearMonth = $year.$month;

        $randomCode = self::randomCode();

        $code = $yearMonth . $randomCode;

        while (static::where('id', $code)->exists()) {
            $randomCode = self::randomCode();
            $code = $yearMonth . $randomCode;
        }

        return $code;
    }

    private static function randomCode()
    {
        return str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
    }

    public function center(): BelongsTo
    {
        return $this->belongsTo(Center::class);
    }
}
