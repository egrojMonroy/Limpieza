<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Hab_has_tarea;
use App\Ubicacion;
use App\Sol_limp;
use App\Empleado;
use App\Tarea;
use Illuminate\Http\Request;

class AmadellaveController extends Controller
{
    public function index()
    {	
    	$habitaciones = Dependencia::all();
        return view('amadellave')->with(["habitaciones"=>$habitaciones]);
    }
}