<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="ml-32 bg-black">
        <!--Hero Trailer -->
        <div class="flex h-[30rem] flex-col-reverse lg:flex-row">
            <div class="lg:w-1/3 w-full flex flex-col justify-center items-center">
                <img src="{{ asset('Images/ef053ecd-808e-4535-94d7-086c79cde81f.png@responsive-1600.png') }}"
                    alt="Spider-Man">
                <a href="https://www3.fsonline.app/film/spider-man-brand-new-day-2026"
                    class=" dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-white rounded-full leading-normal bg-red-600 w-1/4 px-5 py-1.5 text-center text-lg">
                    Play
                </a>
            </div>
            <div class="lg:w-2/3 w-full fade-mask fade-left-24 fade-bottom-24 object-cover">
                <video
                    src="{{ asset('Video/Spider_Man_Brand_New_Day_Trailer.mp4') }}"
                     muted autoplay loop playsinline loading="eager">
                </video>
            </div>
        </div>

        <!-- Popular -->
        <x-card-carousel :movies="$popular" title="Popular" category="popular"></x-card-carousel>
        <!-- Upcoming -->
        <x-card-carousel :movies="$upcoming" title="Upcoming" category="upcoming"></x-card-carousel>
        <!-- Trending -->
        <x-card-carousel :movies="$trending" title="Trending Now" category="trending"></x-card-carousel>
        <!-- Top Rated -->
        <x-card-carousel :movies="$topRated" title="Top Rated" category="topRated"></x-card-carousel>
        <x-modal-carousel buttonId="dashboardPlayButton"/>
    </div>
    <x-footer></x-footer>

    </div>
</x-app-layout>