<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    //Relacionar el modelo con la tabla correspondiente
    protected $table = 'incidencias';
}
