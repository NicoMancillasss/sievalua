<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->integer('porcentaje_avance');
            $table->string('documento_probatorio');
            $table->string('observacion');
            $table->string('correccion')->nullable();
            $table->unsignedBigInteger('estatus_id')->unsigned();
            $table->foreign('estatus_id')->references('id')->on('estatus');

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
        Schema::dropIfExists('avances');
    }
}
