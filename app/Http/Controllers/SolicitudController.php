<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('solicitud');
    }
}
