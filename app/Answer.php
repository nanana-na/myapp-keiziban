<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['user_id', 'question_id', 'question_item_id',];
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function question_item()
    {
        return $this->belongsTo('App\QuestionItem');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
