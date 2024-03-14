<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => Http::get('https://api.oss117quotes.xyz/v1/random')->json()['sentence'],
            'meow_id' => DB::table('meows')->inRandomOrder()->first()->id,
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ];
    }
}
