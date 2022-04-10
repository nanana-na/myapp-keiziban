<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ivent extends Model
{
    protected $fillable = ['title', 'group', 'place', 'day', 'time', 'body', 'monney', 'user_id',];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
