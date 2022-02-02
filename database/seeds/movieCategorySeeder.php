<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Category;

class movieCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $movies = Movie::all();
        $categories = Category::all()->modelKeys();
    
        foreach ($movies as $movie) {
          // numero che indica quante categorie associare a questo film
          $randomNumber = rand(1, 5);
    
          // rimescoliamo i generi in ordine casuale
          shuffle($categories);
    
          // prendiamo dall'array solo una sezione partendo da 0 a x
          $movieCategories = array_slice($categories, 0, $randomNumber);
    
          // creiamo l'associazione tra movie e genres
          $movie->categories()->attach($movieCategories);
        }
    }
}
