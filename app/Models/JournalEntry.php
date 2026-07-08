<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'title_de',

        'slug',

        'excerpt',
        'excerpt_en',
        'excerpt_de',

        'content',
        'content_en',
        'content_de',

        'image',

        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];



    //Accessors
    public function getLocalizedTitleAttribute()
    {
        return match (app()->getLocale()) {

            'en' => $this->title_en ?: $this->title,

            'de' => $this->title_de ?: ($this->title_en ?: $this->title),

            default => $this->title,

        };
    }

    public function getLocalizedExcerptAttribute()
    {
        return match (app()->getLocale()) {

            'en' => $this->excerpt_en ?: $this->excerpt,

            'de' => $this->excerpt_de ?: ($this->excerpt_en ?: $this->excerpt),

            default => $this->excerpt,

        };
    }

    public function getLocalizedContentAttribute()
    {
        return match (app()->getLocale()) {

            'en' => $this->content_en ?: $this->content,

            'de' => $this->content_de ?: ($this->content_en ?: $this->content),

            default => $this->content,

        };
    }


}
