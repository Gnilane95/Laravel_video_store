<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->text(10),
            'description'=>fake()->text(120),
            'url_img'=>"https://source.unsplash.com/640x480/?person?/1",
            'nationality'=>fake()->country(),
            'year_created'=>fake()->year(),
            'actors'=>fake()->name(),
        ];
    }
}
