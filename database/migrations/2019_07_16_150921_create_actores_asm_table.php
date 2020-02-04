<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActoresAsmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actores_asm', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('asm_id')->unsigned();
            $table->foreign('asm_id')->references('id')->on('asm');
            $table->unsignedBigInteger('actor_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('cat_actores');
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
        Schema::dropIfExists('actores_asm');
    }
}
