<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceObject extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service_id',
        'image',
        'sort'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
