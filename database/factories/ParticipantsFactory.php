<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'school' => $this->faker->address,
            'registration_number' => $this->faker->numberBetween(1000, 5000),
            'inggris_lisan' => $this->faker->numberBetween(1, 9),
            'Arab_lisan' => $this->faker->numberBetween(1, 9),
            'alquran' => $this->faker->numberBetween(1, 9),
            'ibadah' => $this->faker->numberBetween(1, 9),
            'arab_tulis' => $this->faker->numberBetween(1, 9),
            'inggris_tulis' => $this->faker->numberBetween(1, 9),
            'dirasah_islamiyah' => $this->faker->numberBetween(1, 9),
            'pengetahuan_umum' => $this->faker->numberBetween(1, 9),
            'mtk' => $this->faker->numberBetween(1, 9),
            'fisika' => $this->faker->numberBetween(1, 9),
            'kimia' => $this->faker->numberBetween(1, 9),
            'biologi' => $this->faker->numberBetween(1, 9),
            'tbi' => $this->faker->numberBetween(1, 9),
            'average' => $this->faker->numberBetween(1, 9),
            'period_id' => $this->faker->numberBetween(1, 7),
            'first_choice' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi']),
            'second_choice' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi']),
            'third_choice' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi']),
            'final_choice' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi']),
            'status' => $this->faker->randomElement(['graduated', 'fail', 'matrik']),
            'first_rank' => $this->faker->randomElement(['first_choise', 'second_choise', 'third_choise', 'matrik', 'fail']),
            'second_rank' => $this->faker->randomElement(['first_choise', 'second_choise', 'third_choise', 'matrik', 'fail']),
            'third_rank' => $this->faker->randomElement(['first_choise', 'second_choise', 'third_choise', 'matrik', 'fail']),
            'fourth_rank' => $this->faker->randomElement(['first_choise', 'second_choise', 'third_choise', 'matrik', 'fail']),
            'fifth_rank' => $this->faker->randomElement(['first_choise', 'second_choise', 'third_choise', 'matrik', 'fail']),
        ];
    }
}
