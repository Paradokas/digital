<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */

    public function definition(): array
    {
        return [
            'title' => 'Табурет #' . $this->faker->unique()->numberBetween(10, 100),
            'price' => $this->faker->randomFloat(2, 1000, 9999),
        ];
    }

}
