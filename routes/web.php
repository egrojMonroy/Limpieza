<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('habitaciones','HabitacionesController@index');
Route::get('prueba','AsignacionController@index');
Route::get('ruta_limpieza','Ruta_limpiezaController@index');
Route::get('calendario','CalendarioController@index');

///Jorge
Route::get('habitaciones/form_limpieza/{id_hab}','HabitacionesController@limpieza');
Route::get('habitaciones/form_mantenimiento/{id_hab}','HabitacionesController@mantenimiento');
Route::get('habitaciones/store_limp/','HabitacionesController@store_limp');
Route::get('habitaciones/store_mant/','HabitacionesController@store_mant');
Route::get('ruta_limpieza/save','Ruta_limpiezaController@save');
Route::get('ruta_limpieza/mantenimiento','Ruta_limpiezaController@mantenimiento');
Route::get('creacion','CreacionController@index');

///end Jorge