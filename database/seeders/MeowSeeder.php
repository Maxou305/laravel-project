<?php

namespace Database\Seeders;

use App\Models\Meow;
use Illuminate\Database\Seeder;

class MeowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meow::factory()->count(500)->create();
    }
}
