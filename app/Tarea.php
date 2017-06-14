<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
