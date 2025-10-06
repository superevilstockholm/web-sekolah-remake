<?php

namespace Database\Seeders\MasterData;

use Illuminate\Database\Seeder;

// Models
use App\Models\MasterData\Events;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Events::factory(20)->create();
    }
}
