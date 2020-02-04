<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalagoEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalago_evaluacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ejercicio_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
            //Evaluaciones
            $table->unsignedBigInteger('evaluacion_id')->unsigned()->nullable();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones')->nullable();
            //catalago_documentos
            $table->unsignedBigInteger('catalago_documento_id')->unsigned();
            $table->foreign('catalago_documento_id')->references('id')->on('catalago_documentos');
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
        Schema::dropIfExists('catalago_evaluacion');
    }
}
