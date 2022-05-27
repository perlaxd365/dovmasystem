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
        Schema::create('tipo_personas', function (Blueprint $table) {
            // key
            $table->id('id_tipo_persona');
            // key foreign empresa
            $table->integer('id_empresa')->nullable();
            //table
            $table->string('descripcion', '100')->nullable()->comment('Tipo de persona: natural o jurídica');
            $table->string('vigencia', '5')->nullable();
        });

        DB::table('tipo_personas')->insert([

            [
                'id_empresa' => config('app.empresa','emp_1'), 'vigencia' => 'SI',
                'descripcion' => 'Natural'
            ],


            [
                'id_empresa' => config('app.empresa','emp_1'), 'vigencia' => 'SI',
                 'descripcion' => 'Jurídica'
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
        Schema::dropIfExists('tipo_personas');
    }
};
