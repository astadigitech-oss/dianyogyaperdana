<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryObject extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'gallery_id',
        'image',
        'sort',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
