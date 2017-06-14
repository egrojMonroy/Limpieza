<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hab_has_tarea extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'id_dep','id_tarea',
    ];

    /**

     */
    protected $hidden = [

    ];
}