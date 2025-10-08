<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// Models
use App\Models\User;

// Seeders
use Database\Seeders\MasterData\NewsSeeder;
use Database\Seeders\MasterData\EventsSeeder;
use Database\Seeders\MasterData\PublicationsSeeder;
use Database\Seeders\MasterData\PPDBSeeder;
use Database\Seeders\MasterData\BlogsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );

        // News Seeder
        $this->call(NewsSeeder::class);

        // Events Seeder
        $this->call(EventsSeeder::class);

        // Events Seeder
        $this->call(PublicationsSeeder::class);

        // PPDB Seeder
        $this->call(PPDBSeeder::class);

        // Blogs Seeder
        $this->call(BlogsSeeder::class);
    }
}
