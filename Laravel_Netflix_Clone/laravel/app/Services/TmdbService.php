<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.tmdb.url');
        $this->apiKey = config('services.tmdb.key');
    }

    public function movie($id)
    {
        return Http::get("{$this->baseUrl}/movie/{$id}", [
            'api_key' => $this->apiKey,
        ])->json();
    }
    public function movieVideos($movieId)
    {
        return Http::get("{$this->baseUrl}/movie/{$movieId}/videos", [
            'api_key' => $this->apiKey,
        ])->json();
    }
    public function popularMovies($page = 1)
    {
        return Http::get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey,
            'page' => $page,
        ])->json();
    }
    public function topRatedMovies($page = 1)
    {
        return Http::get("{$this->baseUrl}/movie/top_rated", [
            'api_key' => $this->apiKey,
            'page' => $page,
        ])->json();
    }

    public function trending($page = 1)
    {
        return Http::get("{$this->baseUrl}/trending/movie/week", [
            'api_key' => $this->apiKey,
            'page' => $page,
        ])->json();
    }

    public function upcoming($page = 1)
    {
        return Http::get("{$this->baseUrl}/movie/upcoming", [
            'api_key' => $this->apiKey,
            'page' => $page,
        ])->json();
    }
}