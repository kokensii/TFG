<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetRound extends Model
{
    use HasFactory;
    public $table = "bet_round";
    protected $fillable = [
        'id', 'id_home_team', 'id_away_team', 'result_home', 'result_away', 'id_rounds',
    ];
    function equipo(){
        return $this->hasOne('Team','id_home_team');
    }
}