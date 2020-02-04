<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('asm');
            $table->text('recomendacion');
            $table->boolean('activo')->default(0);
            $table->string('documento_referencia')->nullable();
            //Llave foranea de la evaluacion correspondente
            $table->unsignedBigInteger('evaluacion_id')->unsigned();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones');

             /*llaves Foranea de fuente de Informacion
            $table->unsignedBigInteger('tipo_evaluacion_id')->unsigned();
            $table->foreign('tipo_evaluacion_id')->references('id')->on('cat_evaluaciones');*/

            /*llaves Foranea Programas
            $table->unsignedBigInteger('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('cat_programas');*/

            /*llaves Foranea Ejercicios*/
            $table->unsignedBigInteger('ejercicio_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');

            /*Nivel de Prioridad*/
            //$table->enum('nivel_prioridad', ['Alto', 'Medio','Bajo','Muy Alto'])->nullable();
            $table->text('prioridad_justificacion')->nullable();
            $table->string('otro_tema')->nullable();
           /*Tipo de Asm*/
            //$table->enum('aspecto', ['Indefinido','Especifico', 'Institucional','Interinstirucional','Intergubernamental']);

            $table->unsignedBigInteger('accion_id')->unsigned()->nullable();
            $table->foreign('accion_id')->references('id')->on('acciones')->nullable();

            $table->unsignedBigInteger('prioridad_id')->unsigned()->nullable();
            $table->foreign('prioridad_id')->references('id')->on('prioridades')->nullable();

            $table->unsignedBigInteger('aspecto_id')->unsigned()->nullable();
            $table->foreign('aspecto_id')->references('id')->on('aspectos')->nullable();

           //$table->enum('accion', ['Corrige', 'Modifica','Adiciona','Reorienta','Suspende'])->nullable();
            /*llaves Foranea Dependencia
            $table->unsignedBigInteger('dependencia_id')->unsigned()->nullable();
            $table->foreign('dependencia_id')->references('id')->on('dependencias')->nullable();*/

            $table->enum('tipo', ['Administrador', 'Dependencia','Despacho']);

            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();

             $table->unsignedBigInteger('despacho_id')->unsigned()->nullable();
            $table->foreign('despacho_id')->references('id')->on('users')->nullable();

            $table->unsignedBigInteger('estatus_id')->unsigned()->nullable();
            $table->foreign('estatus_id')->references('id')->on('estatus')->nullable();

            $table->text('correcciones')->nullable();
            //Nuevos atributos agregados
            $table->string('justificacion_accion');
            $table->string('area_responsable')->nullable();
            $table->string('area_coordinadora')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('resultados_esperados')->nullable();
            $table->string('evidencia')->nullable();
            $table->string('documento_probatorio')->nullable();
            $table->text('observacion')->nullable();
            




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
        Schema::dropIfExists('asm');
    }
}
