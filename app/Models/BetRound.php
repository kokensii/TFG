<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetRound extends Model
{
    use HasFactory;
    public $timestamp = false;
    public $table = "bet_round";
    protected $fillable = [
        'id', 'id_home_team', 'id_away_team', 'result', 'id_home_team_2', 'id_away_team_2', 
        'result_2', 'id_jornada', 'end', 'updated_at', 'created_at',
    ];
    function equipo(){
        return $this->hasOne('Team','id_home_team');
    }
}