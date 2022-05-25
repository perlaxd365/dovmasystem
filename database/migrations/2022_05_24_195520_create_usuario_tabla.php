<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_id')->nullable()->comment('ID del tipo de Usuario');
            $table->string('nombre',150)->comment('Nombres Usuario');
            $table->string('apellido',150)->comment('Apellido de Usuario');
            $table->string('dni',8)->comment('Dni de Usuario');
            $table->string('email',100)->comment('Email de Usuario');
            $table->text('direccion')->comment('Direccion de Usuario');
            $table->string('telefono',20)->comment('Telefono de Usuario');
            $table->string('estado',20)->comment('ESTADO : Activo o Inactivo'); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_id')->references('id_tipo')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuarios');
    }
};
