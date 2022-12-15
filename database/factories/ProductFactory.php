<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $usersIDs = DB::table('users')->pluck('id');

        return [
            'name' => fake()->word(),
            'material' => fake()->randomElement(['gold', 'silver', 'bronze']),
            'category' => fake()->randomElement(['EARRINGS', 'BRACELETS', 'NECKLACES']),
            'price' => fake()->randomFloat(),
            'inventory' => fake()->randomDigit(),
            'user_id' => fake()->randomElement($usersIDs)
        ];
    }
}
