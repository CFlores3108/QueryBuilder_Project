<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 5),
            'total' => $this->faker->randomFloat(2, 100, 1500),
            'id_usuario' => \App\Models\Usuario::factory(),
        ];
    }
}
