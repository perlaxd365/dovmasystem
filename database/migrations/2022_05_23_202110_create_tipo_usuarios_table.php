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
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id('id_tipo');
            $table->string('nombre_tipo','100');
            $table->timestamps();
        });
        
        DB::table('tipo_usuarios')->insert([
            
            ['nombre_tipo' => 'Minorista', 'created_at' => date('Y-m-d')],
            ['nombre_tipo' => 'Mayorista', 'created_at' => date('Y-m-d')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
    }
};
