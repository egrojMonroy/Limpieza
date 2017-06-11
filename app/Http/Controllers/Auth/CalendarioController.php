<?php

namespace App\Http\Controllers;

use App\Dependencia_has_objeto;
use App\Dependencias;
use App\Sol_limp;
use App\Sol_mant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function index()
    {
        return view('calendario')->with(['calendar'=>1]);
    }
}
