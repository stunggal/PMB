<?php

namespace Database\Seeders;

use App\Models\Bobot;
use App\Models\Participants;
use App\Models\Periodes;
use App\Models\Score;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Participants::factory(1000)->create();
        Periodes::factory(7)->create();
        Score::factory(1)->create();
        Bobot::factory(1)->create();
    }
}
