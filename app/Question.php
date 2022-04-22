<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'number', 'user_id', 'enjoy_day'];
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function question_items()
    {
        return $this->hasMany('App\QuestionItem')->withCount('answers')->orderby('answers_count', 'desc');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
