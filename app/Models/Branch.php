<?php

namespace App\Models;

use App\Trait\LimitActiveRecords;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes, LimitActiveRecords;

    public function maxActive(): int
    {
        return 3;
    }

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'is_active'
    ];
}
