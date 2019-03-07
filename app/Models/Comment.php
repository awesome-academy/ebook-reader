<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class Comment extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $guarded = ['id'];

    protected $cascadeDeletes = ['replies'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deteted_at',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Comment', 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\Comment', 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
