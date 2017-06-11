<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Ubicacion;
use Illuminate\Http\Request;

class CreacionController extends Controller
{
    public function index(){
        $habitaciones = Dependencia::all();
        $ubicaciones =Ubicacion::all();
        return view('creacion')->with(["habitaciones"=>$habitaciones,"ubicaciones"=>$ubicaciones]);
    }
}
