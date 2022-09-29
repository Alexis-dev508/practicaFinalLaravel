<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AlumnosModel; //Importamos el modelo de alumnos

class Alumnos extends Controller
{
    function Mostrar(){
        $alumnos = AlumnosModel::all();
        return view('welcome')->with(compact('alumnos'));
    }
}
