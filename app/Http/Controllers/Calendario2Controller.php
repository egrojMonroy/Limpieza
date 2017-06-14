<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tareas_has_empleados;
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
   dd($request->empleados);
        foreach($request->tareas as $row){
            $tarea_has_empleados=new Tareas_has_empleados();
            $tarea_has_empleados->id_tarea = $row;
            $tarea_has_empleados->id_emp = $request->empleado;
            $tarea_has_empleados->dia = $request->size;
            $tarea_has_empleados->save();
        }

        return $this->index();
    }
}