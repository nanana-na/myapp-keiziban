<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = ['body', 'user_id', 'friend_id', 'ask_id',];
    public function friend()
    {
        return $this->belongsTo('App\Friend');
    }
    public function ask()
    {
        return $this->belongsTo('App\User');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
