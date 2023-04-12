<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'app'=>$this->faker->name(),
            'apm'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password(6,20),
            'imagen'=>$this->faker->text(10),
            'telefono'=>$this->faker->numerify('###-###-####'),
        ];
    }
}
