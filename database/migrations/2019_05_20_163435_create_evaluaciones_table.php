<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('entregable')->default('Informe Final');
            $table->unsignedBigInteger('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')->references('id')->on('dependencias');
             $table->unsignedBigInteger('ejercicio_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
             $table->unsignedBigInteger('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('cat_programas');
             $table->unsignedBigInteger('tipo_evaluacion')->unsigned();
            $table->foreign('tipo_evaluacion')->references('id')->on('cat_evaluaciones');
            $table->boolean('activo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones');
    }
}
