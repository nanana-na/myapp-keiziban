<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendmessage extends Model
{
    protected $fillable = ['body', 'user_id',];
    public function friend()
    {
        return $this->belongsTo('App\Friend');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
