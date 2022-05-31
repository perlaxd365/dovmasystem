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
        Schema::create('productos', function (Blueprint $table) {
            //id 
            $table->id('id_producto')->comment('Clave primaria');
            $table->string('codigo_interno', 20)->comment('Codigo interno por cada producto');
            $table->unsignedBigInteger('id_uni_med_stock')->comment('ID de la tabla unidad de medida del stock');
            $table->unsignedBigInteger('id_uni_med_capacidad')->comment('ID de la tabla unidad de medida de la capacidad');
            $table->integer('id_empresa')->comment('ID de la empresa');
            //Datos de producto 
            $table->text('descripcion_pro')->nullable()->comment('Descripción de producto');
            $table->double('capacidad_pro')->nullable()->comment('Capacidad de producto');
            $table->boolean('vigencia_pro', 5)->default(true)->comment('Vigencia del producto: SI o NO');
            //datos de auditoria 
            $table->string('usuario_creacion', '150')->nullable();
            $table->string('fecha_creacion', '30')->nullable();
            $table->string('usuario_modificacion', '150')->nullable();
            $table->string('fecha_modificacion', '30')->nullable();
            $table->string('usuario_eliminacion', '150')->nullable();
            $table->string('fecha_eliminacion', '30')->nullable();
            $table->timestamps();
            //Referencia de unidad de medida de stock a tabla unidad de medida
            $table->foreign('id_uni_med_stock')->references('id_uni_med')->on('unidad_medidas');
            //Referencia de unidad de medida de capacidad a tabla unidad de medida
            $table->foreign('id_uni_med_capacidad')->references('id_uni_med')->on('unidad_medidas');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
