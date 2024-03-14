<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
            'content' => Http::get('https://kaamelott.chaudie.re/api/random')->json()['citation']['citation'],
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ];
    }
}
