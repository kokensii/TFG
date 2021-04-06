<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $fillable = [
        'id_equipo_local1', 'id_equipo_visitante1', 'resultado1', 'id_equipo_local2', 'id_equipo_visitante2', 'resultado2',
    ];
}
