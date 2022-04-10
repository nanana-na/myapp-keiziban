<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Friend extends Model
{
    protected $dates = [
        'enjoy_day'
    ];


    protected $fillable = ['title', 'body', 'user_id', 'enjoy_day'];
    public function friendmessages()
    {
        return $this->hasMany('App\Friendmessage')->latest();
    }
    public function asks()
    {
        return $this->hasMany('App\Ask');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
