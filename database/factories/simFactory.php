<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\sim;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sim>
 */
class simFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productid' => \App\Models\sm::factory(),
            'qty' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->randomFloat(2, 10, 100),

        ];
    }
}
