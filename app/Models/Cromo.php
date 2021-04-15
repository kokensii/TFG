<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cromo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'temporada', 'urlImage', 'id_equipo',
    ];
}
