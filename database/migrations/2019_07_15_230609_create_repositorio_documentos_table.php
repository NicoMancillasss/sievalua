<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositorioDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorio_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta');
            $table->unsignedBigInteger('catalago_documento_id')->unsigned();
            $table->foreign('catalago_documento_id')->references('id')->on('catalago_evaluacion');

            $table->unsignedBigInteger('postulacion_id')->unsigned()->nullable();
            $table->foreign('postulacion_id')->references('id')->on('postula');

            $table->unsignedBigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitudes')->nullable();
            $table->string('correccion')->nullable();
       
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
        Schema::dropIfExists('repositorio_documentos');
    }
}
