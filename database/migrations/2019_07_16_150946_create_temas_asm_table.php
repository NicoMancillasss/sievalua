<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasAsmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_asm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asm_id')->unsigned();
            $table->foreign('asm_id')->references('id')->on('asm');
            $table->unsignedBigInteger('tema_id')->unsigned();
            $table->foreign('tema_id')->references('id')->on('cat_temas');
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
        Schema::dropIfExists('temas_asm');
    }
}
