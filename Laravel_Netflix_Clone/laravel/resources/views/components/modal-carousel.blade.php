@props(['playHref' => '/#', 'buttonId'])

<div id="movieModal" class="fixed inset-0 z-[9999] justify-center items-center h-screen hidden text-white">
    <div class="absolute inset-0 bg-black/70"></div>
    <div
        class="relative inset-0 sm:w-11/12 md:w-10/12 lg:w-1/2 w-full bg-[#181818] rounded-lg flex flex-col bg-neutral-primary-soft p-6 border border-spacing-1 border-red-600 rounded-base shadow-xs sm:flex-row h-1/2">
        <button id="closeModal"
            class="absolute top-5 right-5 hover:bg-gray-800 hover:text-red-600 h-10 w-10 rounded-full">X</button>
        <img id="modalPoster"
            class="object-cover w-full h-1/2 rounded-base sm:h-auto sm:w-48 mb-4 sm:mb-0 fade-mask sm:fade-right-10 rounded md:w-1/3">
        <div class="flex flex-col justify-between">
            <h2 id="modalTitle" class="self-center font-bold text-3xl"></h2>
            <p id="modalOverview" class="px-5"></p>
            <div class="flex gap-2 justify-center">
                <a href="{{ $playHref }}" id="{{ $buttonId }}"
                    class="dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-white rounded-md text-sm leading-normal bg-red-600 w-1/4 text-center px-5 py-2 self-center">
                    Play
                </a>
                @auth
                    @if(auth()->user()->hasVerifiedEmail() && !request()->routeIs('watch-later'))
                        <button id="watchLaterButton"
                            class="dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-white rounded-md text-sm leading-normal bg-red-600 w-fit text-center px-5 py-1.5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> <span>Watch Later</span>
                        </button>
                    @elseif (request()->routeIs('watch-later'))
                        <button id="removeWatchLaterButton" class="dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-white rounded-md text-sm leading-normal bg-red-600 w-1/4 text-center px-5 py-2 self-center"
                            ">
                            Remove
                        </button>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</div>