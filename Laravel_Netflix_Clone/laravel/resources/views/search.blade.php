<x-app-layout>

    <div class="p-8 ml-32">



        @if($movies->isEmpty())

            <p class="text-gray-400">
                No movies found.
            </p>

        @else
            <h1 class="font-bold text-2xl mb-7 text-white"> Results for "{{ $query }}"</h1>
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
        @endif

    </div>

</x-app-layout>