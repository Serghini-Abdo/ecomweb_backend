<?php

namespace Database\Factories;

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
     */
    public function definition(): array
    {
        return [
            //
            "name"=>fake()->unique()->countryCode(),
            "desc"=>fake()->sentence(),
            "org_price"=>fake()->numberBetween(100,300),
            "sell_price"=>fake()->numberBetween(300,500),
            "stock"=>fake()->numberBetween(50,200)


        ];
    }
}
