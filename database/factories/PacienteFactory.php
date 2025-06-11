<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = fake()->randomElement(['male','female']);

        return [
            //
            'nombre'=>fake()->name($gender),
            'apellido_p'=>fake()->lastName(),
            'apellido_m'=>fake()->lastName(),
            'domicilio'=>fake()->address(),
            'tel'=>fake()->phoneNumber(),
            'ocupacion'=>fake()->jobTitle(),
            'edad'=>fake()->numberBetween(18,99),
            'sexo'=>$gender,
            'fecha_nac'=>fake()->date(),
            'fecha_in'=>now(),

        ];
      
    }
  
}
