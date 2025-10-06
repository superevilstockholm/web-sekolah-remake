<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

// Models
use App\Models\MasterData\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory(20)->create();
    }
}
