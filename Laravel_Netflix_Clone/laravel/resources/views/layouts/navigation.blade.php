<nav>
    <div class="fixed left-0 top-0 w-32 z-50 h-screen bg-black text-white">

        <div class="py-10 text-gray-700 bg-[#0a0a0a] capitalize font-medium shadow-lg h-full flex">

            <ul class="flex flex-col justify-between mx-auto text-white">
                <li>
                    <!-- Logo -->
                    <div class="shrink-0 place-self-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo
                                class="block h-20 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        </a>
                    </div>
                    <div class="p-4"></div>
                </li>
                <li>
                    @csrf
                    <!-- Search -->
                    <div x-data="{ open: false }" class="relative flex items-center">
                        <span class="cursor-pointer w-fit" @click="open = !open">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-16 p-2 hover:bg-zinc-700 hover:text-red-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>

                        <form action="{{ route('search') }}" method="GET" x-show="open" x-transition x-cloak
                            class="absolute left-20 flex items-center gap-2 z-100">

                            <input x-ref="search"
                                x-init="$watch('open', value => value && $nextTick(() => $refs.search.focus()))"
                                type="text" name="q" placeholder="Search movies..."
                                class="rounded-md px-3 py-2 w-64 text-black">

                            <button type="submit"
                                class="bg-red-600 px-4 py-2 rounded-md text-white hover:bg-red-900 border border-white hover:border-red-500">
                                Search
                            </button>
                        </form>

                    </div>
                </li>
                <li>
                    <!-- Home -->
                    <a href="{{ route('dashboard') }}">
                        <span class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-16 p-2 hover:bg-zinc-700 hover:text-red-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <!-- Profile -->

                    <div class="flex">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button>
                                    <span class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-16 p-2 hover:bg-zinc-700 hover:text-red-600 rounded-full">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                    </span>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    </span>
                </li>
                <li>
                    <!-- Watch Later -->
                    <a href="{{ route('watch-later')}}">
                        <span class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-16 p-2 hover:bg-zinc-700 hover:text-red-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>

        </div>
    </div>

</nav>