<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta_limpieza extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_emp','id_dep','jabon','toallas','sabanas','papel','gaseosas','agua','chocolate','otro_serv','fecha_limp','otro_limp',
        'otro_limp_name','otro_serv_name','observaciones'
    ];

    /**

     */
    protected $hidden = [

    ];
}
