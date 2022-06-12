<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'min' => $this->faker->numberBetween(0, 10),
            'matrik' => $this->faker->numberBetween(3, 3),
            'fail' => $this->faker->numberBetween(2, 2),
        ];
    }
}
