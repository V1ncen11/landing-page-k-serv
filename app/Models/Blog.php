<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'image', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
