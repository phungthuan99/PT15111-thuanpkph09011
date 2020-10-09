<?php

namespace Database\Factories;

use App\Models\Category_Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Category_PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding Category_Post.
     *
     * @var string
     */
    protected $model = Category_Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
