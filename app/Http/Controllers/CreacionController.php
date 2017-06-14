<?php

namespace App\Http\Controllers;

use App\Dependencia;
use App\Hab_has_tarea;
use App\Ubicacion;
use App\Tarea;
use Illuminate\Http\Request;

class CreacionController extends Controller
{
    public $repo=0;
    public function index(){

        $habitaciones = Dependencia::all();
        $ubicaciones =Ubicacion::all();
        if($this->repo==0){
            $this->getChecks();
        }

        $checkins = Dependencia::where('tipo_dep','in')->get();

        $checkouts= Dependencia::where('tipo_dep','out')->get();


        return view('creacion')->with(["habitaciones"=>$habitaciones,"ubicaciones"=>$ubicaciones,"checkins"=>$checkins,"checkouts"=>$checkouts]);
    }
    public function getChecks(){
        $json = file_get_contents("https://checkinempresarial.herokuapp.com/index.php/rooms/checkout_list");

        $obj = json_decode($json,true);

        foreach ($obj as $item){
            $item['rms_id']=$this->transform($item['rms_id']);
            $nuevo = Dependencia::find($item['rms_id']);
            if($item['rms_state'] =="check out"){
                $nuevo->tipo_dep = "out";
            }   else {
                $nuevo->tipo_dep = "in";
            }
            $nuevo->save();
        }


    }
    public function transform($string){
        $id_floor = filter_var($string, FILTER_SANITIZE_NUMBER_INT);
        $char =(preg_replace('/[0-9]+/', '', $string));
        $id_dep = ($id_floor-1)*6;
        $check = ord($char)-ord('A');

        $id_dep = $id_dep + $check+1;
        return $id_dep;
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
