<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Tarea;
use App\Empleado;
use App\Tarea_has_empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CalendarController extends Controller
{
    public function index()
    {

        return view('calendar');
    }

}