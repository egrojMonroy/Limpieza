<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function store(Request $request){

        $count = Usuario::where('nick','=',$request->nombre)->get()->count();

        if($count==0){
            //no existe
            return view('login')->with(['msj'=>"No existe el usuario"]);
        }else{
            $user= Usuario::where('nick','=',$request->nombre)->get();


            if($request->password != $user[0]->password){
                //contraseña incorrecta
                return view('login')->with(['msj'=>"Constraseña incorrecta"]);
            }else{
                //contraseña correcta
                //mandar en funciona a los roles, y ademas mandar el id.
                //role 2 es empleados| 1 ama de llaves |0 supervisor | 3 habitacion
                $role = $user[0]->role;
                if($role==2){
                    //retornar la vista del CESAR


                    return redirect()->action('EmpleadoController@index',['nick'=>$user[0]->nick]);

                }else if($role==3){
                    //retornar vista de habitaciones
                    //ya esta
                    return redirect()->action('HabitacionesController@index',['nick'=>$user[0]->nick]);
                }else if($role==1){
                    //retornar vista de ama de llaves (CUAL ES?)
                }else{
                    //retornar vista de supervisor
                    //Menu de cronograma etc etc
                    return view('creacion');
                }
            }
        }

        //ESToy haciendo que los usuarios saquen para validar y enviar views distintas por roles
        /*if($user==){
            dd("YES");
        }else{
            dd("NOD");
        }*/
 //       if($user->password!=$request->getPassword())
    }
}
