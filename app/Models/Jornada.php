<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_equipo_local1', 'id_equipo_visitante1', 'resultado1', 'id_equipo_local2', 'id_equipo_visitante2', 'resultado2',
    ];
}
