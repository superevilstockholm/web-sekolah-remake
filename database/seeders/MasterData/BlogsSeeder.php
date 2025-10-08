<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

// Factories
use Database\Factories\MasterData\BlogsFactory;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogsFactory::new()->count(10)->create();
    }
}
