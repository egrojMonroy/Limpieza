<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolMantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sol_mant',function(Blueprint $table){
            $table->increments('id');
            $table->timestamp('dato_temp');
            $table->integer('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')->references('id')->on('dependencias');
            $table->integer('empleado_id')->nullable;
            $table->text('descripcion')->nullable;
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
        Schema::drop('sol_mant');
        //
    }
}
