<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-sm font-medium text-center text-body border-b border-default">
                        <x-category-tabs>
                            No Categories
                        </x-category-tabs>
                    </div>
                </div>
                
                <div class="mt-8 text-gray-900">
                        @forelse ($posts as $p)
                            <x-post-item :post="$p" />
                        @empty
                        <div>
                            <p class="text-gray-900 text-center p-5">No posts found</p>
                        </div>
                        @endforelse
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>