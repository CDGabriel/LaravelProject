 @props([
    'title',
    'movies',
    'category'
])

<section class="text-white">
    <h1 class="font-bold text-2xl pl-10">{{ $title }}</h1>

    <div class="swiper movieSwiper">
        <div class="swiper-wrapper p-12">
            @foreach ($movies as $movie)
                <div class="swiper-slide">
                    <div class="movie-card hover:cursor-pointer" data-id="{{ $movie->id }}" data-category="{{ $category }}">
                        <img
                            src="https://image.tmdb.org/t/p/w500{{ $movie->poster_path }}"
                            alt="{{ $movie->title }}"
                            class="rounded-lg"
                        >
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>