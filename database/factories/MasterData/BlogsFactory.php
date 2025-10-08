<?php

namespace Database\Factories\MasterData;

use Illuminate\Database\Eloquent\Factories\Factory;

// Models
use App\Models\User;
use App\Models\MasterData\Blogs;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterData\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Blogs::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);

        // Pilihan kategori dummy
        $categories = ['blog', 'artikel'];

        // Konten dummy ala CKEditor (Markdown / HTML)
        $content = "
<h2>{$this->faker->sentence(3)}</h2>
<p>{$this->faker->paragraphs(2, true)}</p>
<h3>{$this->faker->sentence(2)}</h3>
<ul>
    <li>{$this->faker->sentence()}</li>
    <li>{$this->faker->sentence()}</li>
    <li>{$this->faker->sentence()}</li>
</ul>
<figure class=\"image\">
    <img src=\"https://picsum.photos/seed/{$this->faker->numberBetween(1,1000)}/800/400\" alt=\"{$title}\">
</figure>
<p>{$this->faker->paragraph()}</p>
";

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => null,
            'content' => $content,
            'category' => $this->faker->randomElement($categories),
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
        ];
    }
}
