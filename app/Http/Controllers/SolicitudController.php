<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Hab_has_tarea;
use App\Ubicacion;
use App\Sol_limp;
use App\Empleado;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {	
    	$empleados = Empleado::all();
        return view('solicitud')->with(["empleados"=>$empleados]);
    }
}
