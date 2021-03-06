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

Route::get('habitaciones/{id}','HabitacionesController@index');
Route::get('prueba','AsignacionController@index');
Route::get('ruta_limpieza','Ruta_limpiezaController@index');
Route::get('calendario','Calendario2Controller@index');
Route::get('calendario/cronograma','Calendario2Controller@cronograma');
Route::get('calendario2','Calendario2Controller@store');
Route::get('calendario/borrar','Calendario2Controller@borrar');
Route::get('empleado/{id}','EmpleadoController@index');
Route::get('calendar','CalendarController@index');
Route::get('eventualidades','EventualidadesController@index');
Route::get('eventualidades/guardar','EventualidadesController@guardar');

///Oliver
Route::get('solicitud','SolicitudController@index');
Route::get('amadellave','AmadellaveController@index');
///end Oliver

///Diego


/// End Diego


///Jorge
Route::get('habitaciones/form_limpieza/{id_hab}','HabitacionesController@limpieza');
Route::get('habitaciones/form_mantenimiento/{id_hab}','HabitacionesController@mantenimiento');
Route::get('habitaciones/store_limp/','HabitacionesController@store_limp');
Route::get('habitaciones/store_mant/','HabitacionesController@store_mant');
Route::get('ruta_limpieza/save','Ruta_limpiezaController@save');
Route::get('ruta_limpieza/mantenimiento','Ruta_limpiezaController@mantenimiento');
Route::get('creacion','CreacionController@index');
Route::get('creacion/store','CreacionController@store');
Route::get('/','LoginController@index');
Route::get('/login','LoginController@store');

///end Jorge
///
//
Route::get('super', function(){
    return View('super'); // Your Blade template name
});

Route::get('prueba','HabitacionesController@store_limp');