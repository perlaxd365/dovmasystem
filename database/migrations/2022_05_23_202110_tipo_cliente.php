<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tipo_clientes', function (Blueprint $table) {
            // key
            $table->id('id_tipo');
            // key foreign empresa
            $table->integer('id_empresa')->nullable();
            //table
            $table->string('nombre_tipo', '100')->nullable();
            //datos de auditoria 
            $table->string('usuario_creacion', '150')->nullable();
            $table->string('fecha_creacion', '30')->nullable();
            $table->string('usuario_modificacion', '150')->nullable();
            $table->string('fecha_modificacion', '30')->nullable();
            $table->string('usuario_eliminacion', '150')->nullable();
            $table->string('fecha_eliminacion', '30')->nullable();
        });

        DB::table('tipo_clientes')->insert([

            [
                'id_empresa' => config('app.empresa'), 'usuario_creacion' => config('app.proveedor'),
                'fecha_creacion' => now(), 'nombre_tipo' => 'Minorista'
            ],


            [
                'id_empresa' => config('app.empresa'), 'usuario_creacion' => config('app.proveedor'),
                'fecha_creacion' => now(), 'nombre_tipo' => 'Mayorista'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_clientes');
    }
};
