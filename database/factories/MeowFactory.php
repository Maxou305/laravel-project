<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meow>
 */
class MeowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'content' => fake()->sentence(10),
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
