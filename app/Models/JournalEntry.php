<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $fillable = [
        'title',

        'slug',

        'excerpt',

        'content',

        'image',

        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
