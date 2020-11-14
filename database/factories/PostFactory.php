<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'cat_id' => rand(1,10),
            'tag_id' => rand(1,10),
            'comment_id' => rand(1,10),
            'post_title' => $this->faker->sentence,
            'post_slug' => $this->faker->slug,
            'post_description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
        ];
    }
}
