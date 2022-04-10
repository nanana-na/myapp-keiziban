<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id',];
    public function free()
    {
        return $this->belongsTo('App\Free');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
