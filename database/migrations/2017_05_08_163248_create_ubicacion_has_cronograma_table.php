<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionHasCronogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_has_cronograma', function(Blueprint $table){
            $table->increments('id');
            
            $table->integer('ubicacion_id');
           // $table->foreign('ubicacion')->references('id')->on('ubicacion');
            
            $table->integer('cronograma_id');
           // $table->foreign('cronograma')->references('id')->on('cronograma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ubicacion_has_cronograma');
        //
    }
}
