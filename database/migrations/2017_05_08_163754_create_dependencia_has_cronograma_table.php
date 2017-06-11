<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciaHasCronogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronograma_has_dependencia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('cronograma_id');
            //$table->foreign('cronograma')->references('id')->on('cronograma');
            $table->integer('dependencia_id');
            //$table->foreign('dependencia')->references('id')->on('dependencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cronograma_has_dependencia');
    }
}
