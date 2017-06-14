<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tarea_has_empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Calendario2Controller extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        $empleados=Empleado::all();
       /* $lunes =
        $martes
        $miercoles
        $jueves
        $viernes
        $sabado
        $domingo
        */
        return view('emp_cal')->with(["tareas"=>$tareas,"empleados"=>$empleados]);
    }
    public function cronograma(Request $request ){

        $tareas = Tarea::all();
        $empleados = $request->empleado;
         $dia[0] =   $this->query($empleados,"lunes");
         $dia[1] =  $this->query($empleados,"martes");
         $dia[2] = $this->query($empleados,"miercoles");
         $dia[3] = $this->query($empleados,"jueves");
         $dia[4] =  $this->query($empleados,"viernes");
         $dia[5] = $this->query($empleados,"sabado");
         $dia[6] = $this->query($empleados,"domingo");
        return view('calendario')->with(["tareas"=>$tareas,"empleado"=>$empleados,"dia"=>$dia]);
    }

    public function store(Request $request){

        foreach($request->tareas as $row){
            $tarea_has_empleado=new Tarea_has_empleado();
            $tarea_has_empleado->id_tarea = $row;
            $tarea_has_empleado->id_emp = $request->id_emp;
            $tarea_has_empleado->dia = $request->size;
            $tarea_has_empleado->save();
        }

     return $this->cargar($request->id_emp);
    }

    public function borrar(Request $request){
        Tarea_has_empleado::where('id_emp',$request->id_emp)->where('dia',$request->submit)->delete();
        return $this->cargar($request->id_emp);
    }

    public function cargar($empleados){
        $tareas = Tarea::all();
        $dia[0] =   $this->query($empleados,"lunes");
        $dia[1] =  $this->query($empleados,"martes");
        $dia[2] = $this->query($empleados,"miercoles");
        $dia[3] = $this->query($empleados,"jueves");
        $dia[4] =  $this->query($empleados,"viernes");
        $dia[5] = $this->query($empleados,"sabado");
        $dia[6] = $this->query($empleados,"domingo");
        return view('calendario')->with(["tareas"=>$tareas,"empleado"=>$empleados,"dia"=>$dia]);
    }
    public function query($id_emp, $dia){
        //dd("ASDASDFASD");

        $ans = DB::table('tarea_has_empleados')->distinct()->select('id_tarea','id_emp','dia')->where('id_emp',$id_emp)->where('dia',$dia)->get();
        $i=0;
        $sol=null;
        foreach ($ans as $row){
            $tarea=Tarea::find($row->id_tarea);
            $sol[$i]=$tarea->nombre;
            $i++;
        }

        return $sol;
    }
}