<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetRoundUser extends Model
{
    use HasFactory;
    public $table = "bet_round_user";
    protected $fillable = [
        'id', 'id_home_team', 'id_away_team', 'result_home', 'result_away', 'id_rounds',
    ];
    
}