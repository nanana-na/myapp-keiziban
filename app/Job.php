<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['company', 'money', 'place', 'near', 'place_path', 'work_content', 'feature', 'call', 'apply', 'period', 'user_id', 'image',];
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
