<?php

namespace Database\Factories\MasterData;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

// Models
use App\Models\MasterData\Publications;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterData\Publications>
 */
class PublicationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Publications::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'cover' => null,
            'file_path' => 'publications/file/' . $this->faker->uuid . '.pdf',
        ];
    }
}
