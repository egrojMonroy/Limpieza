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
        $eventualidad = Sol_limp::all();
        foreach ($eventualidad as $item){
            $aux = DB::table('objetos')->select('identificador')->where('id',$item->objeto_id)->get();
            $item->objeto = $aux[0]->identificador;
        }

        //dd($eventualidad);
        return view('asignacion')->with(['empleados'=>$empleados,'eventualidades'=>$eventualidad]);
    }


}
