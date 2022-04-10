<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['group', 'date', 'place', 'time', 'body', 'user_id', 'image', 'icon',];
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $dates = [
        'created_at',
    ];
}
