<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio');
            $table->string('rfc');
            $table->string('telefono');
            $table->string('telefono_oficina')->nullable();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->enum('estatus', ['captura','revision', 'aceptado','rechazado','correccion'])->default('captura');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('cat_estados');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('cat_municipios');
            $table->string('redes_sociales')->nullable();
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('ejercicio_id');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('cat_paises');
            $table->string('colonia');
            $table->unsignedBigInteger('vialidad_id');
            $table->foreign('vialidad_id')->references('id')->on('cat_vialidades');
            $table->string('vialidad');
            $table->string('numero_interior')->nullable();
            $table->string('numero_exterior');
            $table->string('codigo_postal');
            $table->text('descripcion_rechazo')->nullable();
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
        Schema::dropIfExists('solicitudes');
    }
}
