<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnosModel extends Model
{
    protected $table = "alumnos"; #Conecta el modelo con la tabla correspondiente
    use HasFactory;
}
