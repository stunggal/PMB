<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BobotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'inggris_lisan' => $this->faker->numberBetween(3, 6),
            'arab_lisan' => $this->faker->numberBetween(3, 6),
            'alquran' => $this->faker->numberBetween(3, 6),
            'ibadah' => $this->faker->numberBetween(3, 6),
            'inggris_tulis' => $this->faker->numberBetween(3, 6),
            'arab_tulis' => $this->faker->numberBetween(3, 6),
            'beban_prodi' => $this->faker->numberBetween(5, 8),
            'matrik' => $this->faker->numberBetween(3, 4),
            'fail' => $this->faker->numberBetween(2, 3),
        ];
    }
}
