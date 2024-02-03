<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\sm;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sm>
 */
class smFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customername' => $this->faker->name,
            'grandtotal' => $this->faker->randomFloat(2, 50, 500),
            'cgst' => $this->faker->randomFloat(2, 5, 20),
            'sgst' => $this->faker->randomFloat(2, 5, 20),
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement([1, 2, 3, 4]),

        ];
    }
}
