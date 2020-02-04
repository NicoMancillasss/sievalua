<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asm_id')->unsigned();
            $table->foreign('asm_id')->references('id')->on('asm');
            $table->string('actividad');
            $table->string('area_coordinadora')->nullable();
            $table->unsignedBigInteger('prioridad_id')->unsigned();
            $table->foreign('prioridad_id')->references('id')->on('prioridades');
            $table->integer('ponderacion')->comment('la ponderacion en porcentaje del 1 al 100 ');
            $table->string('area_responsable');
            $table->date('fecha_termino');
            $table->string('resultados_esperados');
            $table->string('evidencias')->nullable();
            $table->text('correccion')->nullable();
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
        Schema::dropIfExists('actividades');
    }
}
