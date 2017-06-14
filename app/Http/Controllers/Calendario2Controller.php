<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use Illuminate\Http\Request;

class Calendario2Controller extends Controller
{
    public function index()
    {

        $tareas = Tarea::all();
        $empleados=Empleado::all();
        return view('calendario')->with(["tareas"=>$tareas,"empleados"=>$empleados]);
    }
}