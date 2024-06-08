<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**

 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    Public function definition(): array
    {
    return [
        'itemcode' => fake()->itemCode(),
        'itemname' => fake()->itemName(),
        'itemprice' => fake()->numberBetween(50000, 50000),
        'itemdesc' => fake()->sentence(),
        'itempict' => 'https://source.unsplash.com/random/200x300',
        'satuan_id' => satuanFactory::factory()
        ];
    }
}
