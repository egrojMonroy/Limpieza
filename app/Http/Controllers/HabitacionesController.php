<?php

namespace App\Http\Controllers;

use App\Dependencia_has_objeto;
use App\Dependencia;
use App\Sol_limp;
use App\Sol_mant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function index($nick)
    {
        $id_hab = filter_var($nick, FILTER_SANITIZE_NUMBER_INT);
        return view('habitaciones')->with(['habitacion'=>$id_hab]);
    }
    public function limpieza($id_hab)
    {
            $objetos = Dependencia_has_objeto::query()
            ->join('objetos','objetos.id','=','objeto_id')
            ->where('dependencia_id','=',1)
            ->get();
        return view('habitaciones')->with(['limpieza'=>true,'objetos'=>$objetos,'id_hab'=>$id_hab]);
    }
    public function mantenimiento($id_hab){
        $objetos = Dependencia_has_objeto::query()
            ->join('objetos','objetos.id','=','objeto_id')
            ->where('dependencia_id','=',1)
            ->get();
        return view('habitaciones')->with(['mantenimiento'=>true,'habitacion'=>1,'objetos'=>$objetos,'id_hab'=>$id_hab]);
    }
    public function store_limp(Request $request){
        //para guardar los datos del formulario de limpieza
        $sol= new Sol_limp();
        $sol->dato_temp= Carbon::now();
        $sol->objeto_id = $request->objeto_id;
        $sol->dependencia_id = $request->id_hab;
        $sol->descripcion = $request->descripcion;
        $sol->save();
        return view('habitaciones')->with(['habitacion'=>$request->id_hab]);
    }
    public function store_mant(Request $request){
        //para guardar los datos de mantenimiento
        $sol= new Sol_mant();
        $sol->dato_temp= Carbon::now();
        $sol->objeto_id = $request->objeto_id;
        $sol->dependencia_id = $request->id_hab;
        $sol->descripcion = $request->descripcion;
        $sol->save();
        return view('habitaciones')->with(['habitacion'=>$request->id_hab]);
    }
}
