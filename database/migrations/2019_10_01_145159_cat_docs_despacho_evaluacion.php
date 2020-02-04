<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatDocsDespachoEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        la tabla contendra informacion de los registros para subir los documentos una vez finalizada la evaluacion de los despachos
        */
        Schema::create('catalogo_documento_despacho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('evaluacion_id')->unsigned()->nullable();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones')->nullable();
            //catalago_documentos
            $table->unsignedBigInteger('catalago_documento_id')->unsigned();
            $table->foreign('catalago_documento_id')->references('id')->on('catalago_documentos');
            
            $table->unsignedBigInteger('tipo_archivo_id')->unsigned();
            $table->foreign('tipo_archivo_id')->references('id')->on('cat_tipo_archivos');

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
        Schema::dropIfExists('catalogo_documento_despacho');
    }
}
