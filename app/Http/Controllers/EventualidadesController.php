<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Sol_limp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventualidadesController extends Controller
{

    public function index()
    {

        $empleados = Empleado::all();
        $eventualidad = Sol_limp::whereNull('empleado_id')->get();

        foreach ($eventualidad as $item){
            $aux = DB::table('objetos')->select('identificador')->where('id',$item->objeto_id)->get();
            $item->objeto = $aux[0]->identificador;
        }


        return view('asignacion')->with(['empleados'=>$empleados,'eventualidades'=>$eventualidad]);
    }
    public function guardar(Request $request){
        
        $tarea = Sol_limp::find($request->tarea);
        $tarea->empleado_id = $request->empleado;
        $tarea->save();
        return $this->index();
    }

}
