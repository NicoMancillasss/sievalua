<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnglobaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engloba', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asm_id')->unsigned();
            $table->foreign('asm_id')->references('id')->on('asm');

            $table->unsignedBigInteger('engloba_asm_id')->unsigned();
            $table->foreign('engloba_asm_id')->references('id')->on('asm');
            
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
        Schema::dropIfExists('engloba');
    }
}
