<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionItem extends Model
{
    protected $fillable = ['option', 'question_id',];
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
