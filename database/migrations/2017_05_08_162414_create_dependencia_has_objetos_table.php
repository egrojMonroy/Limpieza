<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciaHasObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencia_has_objetos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')->references('id')->on('dependencias');
            $table->integer('objeto_id')->unsigned();
            $table->foreign('objeto_id')->references('id')->on('objetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dependencia_has_objetos');
    }
}
