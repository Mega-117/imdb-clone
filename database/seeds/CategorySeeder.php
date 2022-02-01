<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [ "action", "horror", "comic", "fantasy", "sci-fi"];

        foreach ($categories as $category) {
            $newCategory= new Category();
            $newCategory->name = $category;
            $newCategory->save();

        }
    }
}
