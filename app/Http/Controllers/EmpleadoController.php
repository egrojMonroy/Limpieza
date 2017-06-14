<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tarea_has_empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $emp=Tarea_has_empleado::all();
        return view('empleado')->with(["tareas"=>$emp]);;
    }


}