<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

// Factories
use Database\Factories\MasterData\PPDBFactory;

class PPDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PPDBFactory::new()->count(10)->create();
    }
}
