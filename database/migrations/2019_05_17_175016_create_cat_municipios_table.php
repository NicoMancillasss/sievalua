<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave');
            $table->string('nombre');
            $table->tinyInteger('activo');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('cat_estados');
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
        Schema::dropIfExists('cat_municipios');
    }
}
