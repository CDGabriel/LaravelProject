<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'image' => $this->faker->imageUrl(),
            'title'=> fake()->sentence(),
            'slug'=>\Illuminate\Support\Str::slug($title),
            'content'=> fake()->paragraph(5),
            'category_id'=> Category::inRandomOrder()->first()->id,
            'user_id'=>1,
            'published_at'=>fake()->optional()->dateTime(),
        ];
    }
}
