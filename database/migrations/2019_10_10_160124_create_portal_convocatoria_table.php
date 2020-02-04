<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalConvocatoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal_convocatoria', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('ejercicio_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
            $table->string('nombre');
            $table->string('imagenConvocatoria')->nullable();
            $table->string('imagenResultado')->nullable();
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
        Schema::dropIfExists('portal_convocatoria');
    }
}
