<?php

use App\Http\Controllers\ProfileController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Services\TmdbService;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;

Route::get('/', function () {
    $popular = Category::where('name', 'Popular')->first()?->movies ?? collect();
    $topRated = Category::where('name', 'Top Rated')->first()?->movies ?? collect();
    $trending = Category::where('name', 'Trending')->first()?->movies ?? collect();
    $upcoming = Category::where('name', 'Upcoming')->first()?->movies ?? collect();

    return view('welcome', compact(
        'popular',
        'topRated',
        'trending',
        'upcoming',
    ));
});

Route::get('/movies/{movieId}/videos', function ($movieId, TmdbService $tmdb) {
    return response()->json(
        $tmdb->movieVideos($movieId)
    );
});

Route::get('/dashboard', function (Movie $movie) {
    $popular = Category::where('name', 'Popular')->first()?->movies ?? collect();
    $topRated = Category::where('name', 'Top Rated')->first()?->movies ?? collect();
    $trending = Category::where('name', 'Trending')->first()?->movies ?? collect();
    $upcoming = Category::where('name', 'Upcoming')->first()?->movies ?? collect();

    return view('dashboard', compact(
        'popular',
        'topRated',
        'trending',
        'upcoming',
    
    ));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/movies/{movie}', function (Movie $movie) {
    return response()->json($movie);
});

Route::post('/movies/{movie}/watch-later', function (Movie $movie) {
    auth()->user()
        ->watchLaterMovies()
        ->syncWithoutDetaching([$movie->id]);

    return response()->json([
        'success' => true,
    ]);
})->middleware(['auth','verified']);

Route::get('/watch-later', function () {
    $movies = auth()->user()->watchLaterMovies;

    return view('watch-later', compact('movies'));
})->middleware(['auth'])->name('watch-later');

Route::delete('/movies/{movie}/watch-later', function (Movie $movie) {

    auth()->user()
        ->watchLaterMovies()
        ->detach($movie->id);

    return response()->json([
        'success' => true,
    ]);

})->middleware('auth')->name('watch-later.remove');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/movies', function () {
        return view('movies');
    })->name('movies');
    Route::get('/search', [MovieController::class, 'search'])
    ->middleware(['auth', 'verified'])
    ->name('search');
});
require __DIR__ . '/auth.php';
