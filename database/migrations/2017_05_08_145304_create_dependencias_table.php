<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('dependencias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('identificador');
            $table->text('tipo_dep')->nullable;

            $table->integer('ubicacion_id')->nullable;
           /* $table->foreign('ubicacion_id')
                    ->references('id')
                    ->on('ubicacion');
            */
            $table->text('estado')->nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependencia');
    }
}
