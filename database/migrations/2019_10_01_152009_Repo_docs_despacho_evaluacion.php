<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RepoDocsDespachoEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //repositorio de documentos para guardar los archivos en la evaluacion final
        Schema::create('repositorio_documento_despacho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta');

            $table->unsignedBigInteger('cat_doc_despacho_id')->unsigned();
            $table->foreign('cat_doc_despacho_id')->references('id')->on('catalogo_documento_despacho');

            $table->unsignedBigInteger('evaluacion_id')->unsigned();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            
           
            
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
        Schema::dropIfExists('repositorio_documento_despacho');
    }
}
