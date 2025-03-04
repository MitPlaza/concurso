<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombretutor',
        'apellidotutor',
        'telefono',
        'email',
        'nombrebebe',
        'nacimiento',
        'sexo',
        'direccion',
        'imagen',
        'acepto',
        'seleccion',

    ];
}
