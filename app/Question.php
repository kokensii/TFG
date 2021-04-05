<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'correct_answer', 'bad_answer1', 'bad_answer2', 'bad_answer3',
    ];
}
