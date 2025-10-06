<?php

namespace Database\Factories\MasterData;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

// Models
use App\Models\User;
use App\Models\MasterData\Events;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Events::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => null, // Bisa diganti faker->image('public/storage/events', 640, 480, null, false) jika mau file nyata
            'content' => $this->faker->paragraphs(3, true),
            'user_id' => User::inRandomOrder()->first()?->id ?? 1,
            'category' => $this->faker->randomElement(['acara', 'acara_berita']),
        ];
    }
}
