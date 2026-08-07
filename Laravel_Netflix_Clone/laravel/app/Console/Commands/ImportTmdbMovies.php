<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Movie;
use App\Services\TmdbService;
use App\Models\Category;

class ImportTmdbMovies extends Command
{
    protected $signature = 'tmdb:import';

    protected $description = 'Import movies from TMDb';

    public function handle(TmdbService $tmdb)
    {
        $categories = [
            'Popular' => fn($page) => $tmdb->popularMovies($page),
            'Top Rated' => fn($page) => $tmdb->topRatedMovies($page),
            'Trending' => fn($page) => $tmdb->trending($page),
            'Upcoming' => fn($page) => $tmdb->upcoming($page),
        ];

        foreach ($categories as $categoryName => $fetcher) {

            $category = Category::firstOrCreate([
                'name' => $categoryName,
            ]);

            for ($page = 1; $page <= 5; $page++) {

                $response = $fetcher($page);

                foreach ($response['results'] as $movie) {

                    $videos = $tmdb->movieVideos($movie['id']);

                    $trailer = collect($videos['results'] ?? [])
                        ->first(
                            fn($video) =>
                            $video['site'] === 'YouTube' &&
                            $video['type'] === 'Trailer'
                        );

                    $movieModel = Movie::updateOrCreate(
                        ['tmdb_id' => $movie['id']],
                        [
                            'title' => $movie['title'],
                            'overview' => $movie['overview'],
                            'release_date' => $movie['release_date'],
                            'popularity' => $movie['popularity'],
                            'vote_average' => $movie['vote_average'],
                            'poster_path' => $movie['poster_path'],
                            'backdrop_path' => $movie['backdrop_path'],
                            'trailer_key' => $trailer['key'] ?? null,
                        ]
                    );

                    $movieModel->categories()
                        ->syncWithoutDetaching([$category->id]);
                }
            }
        }

        $this->info('Movies imported successfully.');
    }
}