<?php

namespace App\Http\Controllers;

use App\Dependencia_has_objeto;
use App\Dependencia;
use App\Ruta_limpieza;
use App\Sol_limp;
use App\Sol_mant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Ruta_limpiezaController extends Controller
{
    public function index()
    {

        return view('ruta_limpieza')->with(['habitacion'=>1]);
    }
    public function save(Request $request){
        $nuevo = new Ruta_limpieza();
        $nuevo->id_emp = '5';
        $nuevo->id_dep= '5';
        $nuevo->jabon=$request->reposiciones[0];
        $nuevo->toallas=$request->reposiciones[1];
        $nuevo->sabanas=$request->reposiciones[2];
        $nuevo->papel=$request->reposiciones[3];
        $nuevo->galletas=$request->reposiciones[4];
        $nuevo->gaseosas=$request->reposiciones[5];
        $nuevo->agua=$request->reposiciones[6];
        $nuevo->chocolate=$request->reposiciones[7];
        $nuevo->otro_serv=$request->reposiciones[8];
        $nuevo->otro_limp=$request->reposiciones[9];
        $nuevo->fecha_limp=Carbon::now();
        $nuevo->otro_limp_name=$request->otro_limp;
        $nuevo->otro_serv_name=$request->otro_serv;
        $nuevo->observaciones=$request->observaciones;
        if($nuevo->save())
        return view('ruta_limpieza');
        else
            dd($request);
        return view('ruta_limpieza');
    }
    public function mantenimiento(){
        return view('ruta_limpieza')->with(['orden_mantenimiento'=>true]);
    }
}