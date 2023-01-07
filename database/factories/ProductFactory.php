<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $name = $this->faker->words(2, true);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'cover' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(1, 10, 500),
            'description' => $this->faker->sentence(),
            'stock' => $this->faker->randomDigit()
        ];
    }
}
