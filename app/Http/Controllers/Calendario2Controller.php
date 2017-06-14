<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tarea_has_empleado;
use Illuminate\Http\Request;

class Calendario2Controller extends Controller
{
    public function index()
    {

        $tareas = Tarea::all();
        $empleados=Empleado::all();
        return view('calendario')->with(["tareas"=>$tareas,"empleados"=>$empleados]);
    }
    public function store(Request $request){

        foreach($request->tareas as $row){
            $tarea_has_empleado=new Tarea_has_empleado();
            $tarea_has_empleado->id_tarea = $row;
            $tarea_has_empleado->id_emp = $request->empleados;
            $tarea_has_empleado->dia = $request->size;
            $tarea_has_empleado->save();
        }

        return $this->index();
    }
}