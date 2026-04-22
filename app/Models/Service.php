<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'description',
        'is_active',
        'sort',
    ];

    public function serviceObjects()
    {
        return $this->hasMany(ServiceObject::class);
    }
}
