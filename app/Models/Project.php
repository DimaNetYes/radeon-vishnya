<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'title_de',

        'slug',

        'description',
        'description_en',
        'description_de',

        'image',
        'github_url',
        'telegram_url',
        'demo_url',
        'apk_url',
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

    public function getLocalizedDescriptionAttribute()
    {
        return match (app()->getLocale()) {

            'en' => $this->description_en ?: $this->description,

            'de' => $this->description_de ?: ($this->description_en ?: $this->description),

            default => $this->description,

        };
    }


}
