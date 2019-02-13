<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function stories()
    {
        return $this->belongsToMany('App\Models\Story', 'meta_story', 'story_id', 'meta_id');
    }

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = str_slug($slug, '-');
    }
}
