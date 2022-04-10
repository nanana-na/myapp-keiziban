<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Free extends Model
{
    protected $fillable = ['title', 'user_id',];
    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
