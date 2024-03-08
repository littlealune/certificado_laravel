<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'dni' => $this->getDni(),
            'apellidos' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'departamento' => $this->faker->randomElement(['Imagen y Sonido','Informática','Marketing y Logística'])
        ];
    }
    private function getDni(): string {
        $letras= "TRWAGMYFPDXBNJZSQVHLCKE";
        $numero = fake()->randomNumber(8);
        return $numero.(substr($letras, $numero/23,1));
    }
}
