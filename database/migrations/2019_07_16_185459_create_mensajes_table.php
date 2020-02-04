<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('txt_solicitud')->nullable();
            $table->string('ruta');
            $table->enum('estatus', ['enviado', 'recibido', 'visto'])->nullable();

            $table->unsignedBigInteger('emisor_id');
            $table->foreign('emisor_id')->references('id')->on('users');
            //llave foranea postula
            $table->unsignedBigInteger('postula_id');
            $table->foreign('postula_id')->references('id')->on('postula');

            $table->integer('receptor_id')->nullable();

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
        Schema::dropIfExists('mensajes');
    }
}
