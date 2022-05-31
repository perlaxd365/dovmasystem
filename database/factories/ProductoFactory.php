<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=producto::class;
    public function definition()
    {
        return [
            
            'codigo_interno'=>$this->faker->numerify('000-000-####'),
            'id_uni_med_stock'=>$this->faker->randomElement(['1','2']),
            'id_uni_med_capacidad'=>$this->faker->randomElement(['3','4']),
            'id_empresa'=>'1',
            'descripcion_pro'=>$this->faker->company(),
            'capacidad_pro'=>$this->faker->randomElement(['625','700','20']),
            'vigencia_pro'=>true,
            'usuario_creacion'=>config('app.proveedor','prov_1'),
            'fecha_creacion'=>now(),
        ];
    }
}
