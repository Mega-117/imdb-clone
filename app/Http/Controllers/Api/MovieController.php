<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Movie;
use App\Category;

class MovieController extends Controller
{
    public function index(Request $request){
        $filter = $request->query();
        $movies = Movie::with("categories");
        $categories =explode(",", $filter["categories"]);
        
        foreach ($categories as $category) {
            $movies->whereHas("categories", function (Builder $query) use($category) {
                $query->where('categories.id', $category);
            });
        }

        return json_encode($movies->get());
    }
}
