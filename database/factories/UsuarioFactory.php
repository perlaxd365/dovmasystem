<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Usuario::class;
    public function definition()
    {
        return [
            'tipo_id'=>$this->faker->randomElement(['1','2']),
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'dni'=>$this->faker->randomNumber(8),
            'email'=>$this->faker->email(),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->phoneNumber(),
            'estado'=>$this->faker->randomElement(['Activo','Inactivo']),
            
        ];
    }
}
