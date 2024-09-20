<?php

namespace Database\Seeders;

use App\Models\Music;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $i = 0;

        $faker = \Faker\Factory::create();

        while ($i < 10) {

            Music::factory()->create([
                'title' => $faker->word(),
                'artist' => $faker->name(),
                'album' => $faker->word(),
                'duration' => $faker->time(),
                'deleted_at' => null
            ]);

            $i++;
        }
    }
}
