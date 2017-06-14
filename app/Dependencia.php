<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dependencia extends Authenticatable
{
        use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        public $timestamps = false;
        protected $fillable = [
             'identificador','ubicacion_id','estado','tipo_dep'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [

        ];
    }
