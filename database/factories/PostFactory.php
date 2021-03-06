<?php

namespace Database\Factories;

use App\Models\Post;
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
            'titulo' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'descripcion' => $this->faker->realText($maxNbChars = 1500),
            'image' => $this->faker->randomElement(['default1.jpg','default2.jpg','default3.jpg']),
        ];
    }
}
