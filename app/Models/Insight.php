<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insight extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'description',
        'is_active',
        'date',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
