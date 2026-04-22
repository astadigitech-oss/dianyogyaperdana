<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'date',
        'image',
        'is_active'
    ];

    public function galleryObjects()
    {
        return $this->hasMany(GalleryObject::class);
    }
}
