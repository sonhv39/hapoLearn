<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'img_url' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat($nbMaxDeciamals = 2, $min = 0, $max = 10000),
        ];
    }
}
