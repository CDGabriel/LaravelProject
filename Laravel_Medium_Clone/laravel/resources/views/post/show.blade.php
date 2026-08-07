<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4">{{ $post->title }}</h1>

                    <!-- User Avatar -->
                    <div class="gap-4 flex">
                        <x-user-avatar :user="$post->user" />

                        <div>
                            <x-follow-ctr :user="$post->user" class="flex gap-2">
                                <a href="{{ route('profile.show', $post->user) }}"
                                    class="hover:underline">{{ $post->user->name }}</a>

                                @auth
                                    &middot;
                                    <button @click="follow()" x-text="following? 'Unfollow':'Follow'"
                                        :class="following?'text-red-600':'text-green-600'"></button>
                                @endauth
                            </x-follow-ctr>

                            <div class="flex gap-2 text-gray-500 text-sm">
                                {{ $post->readTime() }} min read
                                &middot;
                                {{ $post->getCreatedAt() }}
                            </div>
                        </div>


                    </div>
                    <!-- Edit and Delete Buttons -->
                    @if ($post->user_id === Auth::id())
                        <div class="py-4 mt-8  border-t border-gray-200">
                            <x-primary-button href="{{ route('post.edit', $post) }}">
                                Edit Post
                            </x-primary-button>
                            <form class='inline-block' action="{{ route('post.destroy', $post) }}" method='post'>
                                @csrf
                                @method('delete')

                                <x-danger-button>
                                    Delete Post
                                </x-danger-button>
                            </form>
                        </div>
                    @endif
                    <!-- Clap Section -->
                    <x-clap-button :post="$post"></x-clap-button>
                    <!-- Content Section -->
                    <div class="mt-8">
                        <img src="{{ $post->imageURL() }}" alt="{{ $post->title }}" class="w-full">
                        <div class="mt-4">
                            {{ $post->content }}
                        </div>

                        <div class="mt-8">
                            <span class="px-4 py-2 bg-gray-200 rounded-2xl">{{ $post->category->name }}</span>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>