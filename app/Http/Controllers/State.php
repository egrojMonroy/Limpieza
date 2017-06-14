<?php
/**
 * Created by PhpStorm.
 * User: Jorge Monroy
 * Date: 13/06/2017
 * Time: 11:59 PM
 */

namespace App\Http\Controllers;


use App\Dependencia;

class State
{
    public function setState($id,$state){

        Dependencia::where('id',$id)->update(['estado'=>$state]);

    }
    public function getState($id){
        $dep = Dependencia::where('id',$id)->get();
        return $dep->estado;
    }
}