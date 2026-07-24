<ul class="flex flex-wrap -mb-px justify-center">
    <li class="me-2">
        <a href="/"
            class="{{ request('category') ? 
            'inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white'
            : 'inline-block px-4 py-2 rounded-lg text-white bg-gray-800 active'}}">All</a>
    </li>

    @forelse ($categories as $category)
        <li class="me-2">
            <a href="{{ route('post.byCategory', $category) }}" class="{{ request()->routeIs('post.byCategory') && request()->route('category')?->id === $category->id
            ? 'inline-block px-4 py-2 rounded-lg text-white bg-gray-800 active'
            : 'inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white ' }}">
                {{ $category->name }}
            </a>
        </li>
    @empty
        {{ $slot }}
    @endforelse

</ul>