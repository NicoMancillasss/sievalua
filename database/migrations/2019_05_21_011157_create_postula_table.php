<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estatus')->default('1');
            $table->string('cita')->nullable();
            $table->string('lugar')->nullable();
            $table->boolean('firma_contrato')->default(0);
            $table->string('firma_documento')->nullable();
            $table->text('descripcion_rechazo')->nullable();
            $table->unsignedBigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->unsignedBigInteger('evaluacion_id')->unsigned();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones');
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
        Schema::dropIfExists('postula');
    }
}
