<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Add Category
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Create a new category for organizing your expenses.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                <form
                    method="POST"
                    action="{{ route('categories.store') }}"
                    class="space-y-6"
                >
                    @csrf

                    {{-- Name --}}
                    <div>
                        <label
                            for="name"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Category Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="e.g. Food"
                            required
                            autofocus
                            maxlength="255"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >

                        @error('name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div>
                        <label
                            for="description"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Description
                            <span class="font-normal text-gray-400">
                                (optional)
                            </span>
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="4"
                            maxlength="1000"
                            placeholder="e.g. Restaurants, groceries, coffee..."
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >{{ old('description') }}</textarea>

                        @error('description')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Buttons --}}
                    <div class="flex items-center justify-end gap-3 border-t border-gray-200 pt-6">

                        <a
                            href="{{ route('categories.index') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Save Category
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>