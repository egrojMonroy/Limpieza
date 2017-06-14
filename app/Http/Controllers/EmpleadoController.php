<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tarea_has_empleado;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmpleadoController extends Controller
{
    public function index($nick)
    {
        $id_emp = filter_var($nick, FILTER_SANITIZE_NUMBER_INT);

        $day = $this->traducir(Carbon::now()->format('l'));

        $tareas = $this->query($id_emp,$day);

        return view('empleado')->with(["id_emp"=>$id_emp,"tareas"=>$tareas]);;
    }
    public function traducir($string){
        if($string == "Monday")
            return "lunes";
        if($string == "Tuesday")
            return "martes";
        if($string == "Wednesday")
            return "miercoles";
        if($string == "Thursday")
            return "jueves";
        if($string =="Friday")
            return "viernes";
        if($string == "Saturday")
            return "sabado";
        if($string == "Sunday")
            return "domingo";
    }
    //te devuelve las tareas de in id_emp
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
