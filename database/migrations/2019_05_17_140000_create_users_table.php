<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('tipo_persona')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rfc_temporal')->nullable();
            $table->boolean('activo')->default(false);
            $table->unsignedBigInteger('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id')->on('perfiles');
            $table->unsignedBigInteger('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')->references('id')->on('dependencias');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
