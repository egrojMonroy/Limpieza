<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Hab_has_tarea;
use App\Ubicacion;
use App\Tarea;
use Illuminate\Http\Request;

class CreacionController extends Controller
{
    public function index($nick){

        $habitaciones = Dependencia::all();
        $ubicaciones =Ubicacion::all();
        $checkins = Dependencia::where('tipo_dep','in')->get();
        $checkouts= Dependencia::where('tipo_dep','out')->get();
        return view('creacion')->with(["habitaciones"=>$habitaciones,"ubicaciones"=>$ubicaciones,"checkins"=>$checkins,"checkouts"=>$checkouts]);
    }
    public function store(Request $request){

        $tarea= new Tarea();
        $tarea->nombre = $request->nombre;
        $tarea->save();

        foreach($request->habitaciones as $row){
            $hab_has_tarea=new Hab_has_tarea();
            $hab_has_tarea->id_dep = $row;
            $hab_has_tarea->id_tarea= $tarea->id;
            $hab_has_tarea->save();
        }

        return $this->index();
    }
}
