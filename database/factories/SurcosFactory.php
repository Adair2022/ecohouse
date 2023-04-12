<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\surcos>
 */
class SurcosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_surco'=>$this->faker->numerify(),
            'humedad_min'=>$this->faker->numerify(),
            'humedad_max'=>$this->faker->numerify(),
            'temperatura_min'=>$this->faker->numerify(),
            'temperatura_max'=>$this->faker->numerify(),
        ];
    }
}
