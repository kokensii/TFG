<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question', 'correct_answer', 'bad_answer1', 'bad_answer2', 'bad_answer3',
    ];
}
