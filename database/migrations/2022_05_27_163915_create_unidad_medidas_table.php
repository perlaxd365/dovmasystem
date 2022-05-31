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
        Schema::create('unidad_medidas', function (Blueprint $table) {
            //id 
            $table->id('id_uni_med')->comment('Clave primaria');
            $table->integer('id_empresa')->comment('ID de la empresa');
            //datos de tabla
            $table->string('descripcion', 150)->nullable()->comment('Descripcion de la unidad de medida');
            $table->string('abreviatura', 150)->nullable()->comment('Abreviatura de la unidad de medida');
            $table->string('vigencia', 5)->default(true)->comment('Vigencia de la unidad de medida');
            //datos de auditoria 
            $table->string('usuario_creacion', '150')->nullable();
            $table->string('fecha_creacion', '30')->nullable();
            $table->string('usuario_modificacion', '150')->nullable();
            $table->string('fecha_modificacion', '30')->nullable();
            $table->string('usuario_eliminacion', '150')->nullable();
            $table->string('fecha_eliminacion', '30')->nullable();
        });


        DB::table('unidad_medidas')->insert([

            [
                'id_empresa' => config('app.empresa', 'emp_1'),
                'descripcion' => 'Bidon',
                'abreviatura' => 'Bi',
                'usuario_creacion' => config('app.proveedor', 'prov_1'),
                'fecha_creacion' => now(),
            ],
            [
                'id_empresa' => config('app.empresa', 'emp_1'),
                'descripcion' => 'Botella',
                'abreviatura' => 'Bo',
                'usuario_creacion' => config('app.proveedor', 'prov_1'),
                'fecha_creacion' => now(),
            ],
            [
                'id_empresa' => config('app.empresa', 'emp_1'),
                'descripcion' => 'Litros',
                'abreviatura' => 'L',
                'usuario_creacion' => config('app.proveedor', 'prov_1'),
                'fecha_creacion' => now(),
            ],
            [
                'id_empresa' => config('app.empresa', 'emp_1'),
                'descripcion' => 'Mililitros',
                'abreviatura' => 'Ml',
                'usuario_creacion' => config('app.proveedor', 'prov_1'),
                'fecha_creacion' => now(),
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
        Schema::dropIfExists('unidad_medidas');
    }
};
