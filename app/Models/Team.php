<?php

namespace App\Models;

use App\Trait\LimitActiveRecords;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes, LimitActiveRecords;

    protected $fillable = [
        'name',
        'image',
        'description',
        'is_active',
    ];
}
