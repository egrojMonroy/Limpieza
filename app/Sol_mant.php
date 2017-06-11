<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sol_mant extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $fillable = [
        'dato_temp','dependencia_id','empleado_id','descripcion','objeto_id'
    ];
    protected $hidden = [
    ];
}
