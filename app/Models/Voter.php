<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    //Es necesario para usar el factory method en los seeders
    use HasFactory;

    //Es necesario definir esta propiedad para hacer inserciones a la base de datos, de esta forma se asegura que parametros se pueden recibir por inserción de datos
    protected $fillable = [
        'rut',
        'name',
        'lastname',
        'alias',
        'email'
    ];
    protected $table = 'voters';
}
