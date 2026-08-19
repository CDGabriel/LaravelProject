<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Categories
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Organize your expenses into categories.
                </p>
            </div>

            <a
                href="{{ route('categories.create') }}"
                class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
            >
                + Add Category
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                {{-- Header --}}
                <div class="border-b border-gray-200 px-6 py-4">
                    <h3 class="font-semibold text-gray-900">
                        Your Categories
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Categories are used to organize your expenses.
                    </p>
                </div>

                @forelse ($categories as $category)

                    <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4 last:border-b-0">

                        {{-- Category information --}}
                        <div>
                            <h4 class="text-sm font-semibold text-gray-900">
                                {{ $category->name }}
                            </h4>

                            @if ($category->description)
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $category->description }}
                                </p>
                            @endif
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center gap-4">

                            <a
                                href="{{ route('categories.edit', $category) }}"
                                class="text-sm font-medium text-indigo-600 hover:text-indigo-800"
                            >
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="{{ route('categories.destroy', $category) }}"
                                onsubmit="return confirm('Are you sure you want to delete this category?');"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-sm font-medium text-red-600 hover:text-red-800"
                                >
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                @empty

                    <div class="px-6 py-12 text-center">

                        <h3 class="text-sm font-semibold text-gray-900">
                            No categories yet
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Create your first category to start organizing your expenses.
                        </p>

                        <div class="mt-6">
                            <a
                                href="{{ route('categories.create') }}"
                                class="inline-flex rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
                            >
                                + Add Category
                            </a>
                        </div>

                    </div>

                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>