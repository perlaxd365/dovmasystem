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
        Schema::create('clientes', function (Blueprint $table) {
            // Key 
            $table->id('id_cliente');
            //foreign key
            $table->unsignedBigInteger('tipo_id')->comment('ID del tipo de cliente');
            // empresa
            $table->integer('id_empresa');
            //datos de cliente
            $table->string('tipo_persona_cli',30)->comment('Tipo de persona: natural o jurídica');
            $table->string('razon_social_cli',50)->nullable()->comment('Razon Social');
            $table->string('ape_pat_cli',30)->nullable()->comment('Apellido paterno de cliente');
            $table->string('ape_mat_cli',30)->nullable()->comment('Apellido materno de cliente');
            $table->string('nombre_cli',30)->nullable()->comment('Nombre de cliente');
            $table->string('dni_cli',10)->nullable()->comment('Dni de cliente');
            $table->string('ruc_cli',20)->nullable()->comment('Ruc de cliente');
            $table->string('email_cli',50)->nullable()->comment('Email de cliente');
            $table->string('telefono_cli',20)->nullable()->comment('Telefono de cliente');
            $table->text('direccion_cli')->nullable()->comment('Direccion de cliente');
            $table->string('contacto_cli',30)->nullable()->comment('Contacto del cliente de respaldo');
            $table->text('vigencia_cli',5)->nullable()->comment('vigencia de cliente: SI o NO');
            //datos de auditoria 
            $table->string('usuario_creacion','150')->nullable();
            $table->string('fecha_creacion','30')->nullable();
            $table->string('usuario_modificacion','150')->nullable();
            $table->string('fecha_modificacion','30')->nullable();
            $table->string('usuario_eliminacion','150')->nullable();
            $table->string('fecha_eliminacion','30')->nullable();
            $table->timestamps();
            $table->foreign('tipo_id')->references('id_tipo')->on('tipo_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
