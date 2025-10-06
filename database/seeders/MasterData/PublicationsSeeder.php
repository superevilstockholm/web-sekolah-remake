<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

// Models
use App\Models\MasterData\Publications;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publications::factory(20)->create();
    }
}
