<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cromo extends Model
{
    protected $fillable = [
        'name', 'temporada', 'urlImage', 'id_equipo',
    ];
}
