<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Cliente::class;
    
    public function definition()
    {
        

        return [
            'id_tipo_cliente'=>$this->faker->randomElement(['1','2']),
            'id_tipo_persona'=>$this->faker->randomElement(['1','2']),
            'id_empresa'=>'1',
            'razon_social_cli'=>$this->faker->company(),
            'nombre_cli'=>$this->faker->firstName(),
            'ape_pat_cli'=>$this->faker->lastName(),
            'ape_mat_cli'=>$this->faker->lastName(),
            'email_cli'=>$this->faker->email(),
            'dni_cli'=>$this->faker->randomNumber(8),
            'ruc_cli'=>$this->faker->randomNumber(8),
            'telefono_cli'=>$this->faker->phoneNumber(),
            'direccion_cli'=>$this->faker->address(),
            'contacto_cli'=>$this->faker->phoneNumber(),
            'vigencia_cli'=>$this->faker->randomElement(['SI','NO']),
            'usuario_creacion'=>config('app.proveedor','prov_1'),
            'fecha_creacion'=>now(),


            
        ];
    }
}
