<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Category;

class MovieController extends Controller
{


    public function index()
    {
        $popular = Category::where('name', 'Popular')->first()->movies;
        $topRated = Category::where('name', 'Top Rated')->first()->movies;
        $trending = Category::where('name', 'Trending')->first()->movies;
        $upcoming = Category::where('name', 'Upcoming')->first()->movies;

        return view('dashboard', compact(
            'popular',
            'topRated',
            'trending',
            'upcoming'
        ));
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $movies = Movie::query();
        foreach (explode(' ', $query) as $word) {
            $movies->where('title', 'like', "%{$word}%");
        }

        $movies = $movies->orderByDesc('popularity')->get();

        return view('search', compact('movies', 'query'));
    }
}
