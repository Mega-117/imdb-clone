<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(5);
            $newMovie->cover_img = 'https://picsum.photos/400/500';
            $newMovie->description = $faker->paragraph(1);
            $newMovie->relise_date = $faker->dateTime();
            $newMovie->duration = $faker->time();
            $newMovie->rating = $faker->randomFloat(2, 0, 10);
            $newMovie->pegi = $faker->randomFloat(2, 0, 10);
            $newMovie->save();
        }
    }
}
