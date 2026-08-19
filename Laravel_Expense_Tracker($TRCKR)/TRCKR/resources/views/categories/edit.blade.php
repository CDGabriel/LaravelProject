<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Category
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Update the name of your category.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                <form method="POST" action="{{ route('categories.update', $category) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Category name --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Category Name
                        </label>

                        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}"
                            maxlength="255" required autofocus
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="e.g. Food">

                        @error('name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- Category description --}}
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">
                            Category Description
                        </label>

                        <input type="text" id="description" name="description" value="{{ old('description', $category->description) }}"
                            maxlength="255" required autofocus
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="e.g. Money spent on groceries.">

                        @error('description')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- Buttons --}}
                    <div class="flex items-center justify-between border-t border-gray-200 pt-6">

                        <a href="{{ route('categories.index') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Cancel
                        </a>

                        <button type="submit"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Update Category
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>