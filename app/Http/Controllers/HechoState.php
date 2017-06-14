<?php
/**
 * Created by PhpStorm.
 * User: Jorge Monroy
 * Date: 14/06/2017
 * Time: 12:23 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\State;
class HechoState
{
    public function doAction($id){
        $cual = new State();
        $cual->setState($id,'1');
    }
}