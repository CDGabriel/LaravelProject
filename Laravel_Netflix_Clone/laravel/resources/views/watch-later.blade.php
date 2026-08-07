<x-app-layout>
    <div class="ml-32 p-8">
        <h1 class="text-3xl font-bold text-white mb-8">
            Watch Later
        </h1>
        @if ($movies->isEmpty())
            <h1 class="text-xl font-bold text-white mb-8">Your watch later movie list is currently empty. You can add movies using the 'Watch Later' button.</h1>
        @endif
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
                @foreach ($movies as $movie)
                    <div class="swiper-slide mb-10">
                        <div class="movie-card hover:cursor-pointer" data-id="{{ $movie->id }}">
                            <img src="https://image.tmdb.org/t/p/w500{{ $movie->poster_path }}" alt="{{ $movie->title }}"
                                class="rounded-lg">
                        </div>
                    </div>
                @endforeach
                <x-modal-carousel buttonId="dashboardPlayButton" />
            </div>
    </div>
</x-app-layout>