<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Add Budget
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Create a monthly spending budget.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                <form
                    method="POST"
                    action="{{ route('budgets.store') }}"
                    class="space-y-6"
                >
                    @csrf

                    {{-- Category --}}
                    <div>
                        <label
                            for="category_id"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Category
                        </label>

                        <select
                            id="category_id"
                            name="category_id"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >
                            <option value="">
                                Overall Budget
                            </option>

                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    @selected(old('category_id') == $category->id)
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                        <p class="mt-1 text-xs text-gray-500">
                            Leave empty to create an overall budget for all expenses.
                        </p>

                        @error('category_id')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Amount --}}
                    <div>
                        <label
                            for="amount"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Budget Amount
                        </label>

                        <div class="relative mt-1">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                €
                            </span>

                            <input
                                type="number"
                                id="amount"
                                name="amount"
                                value="{{ old('amount') }}"
                                placeholder="0.00"
                                min="0.01"
                                step="0.01"
                                required
                                autofocus
                                class="block w-full rounded-lg border-gray-300 pl-8 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >
                        </div>

                        @error('amount')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Month --}}
                    <div>
                        <label
                            for="month"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Month
                        </label>

                        <select
                            id="month"
                            name="month"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >
                            @foreach (range(1, 12) as $month)
                                <option
                                    value="{{ $month }}"
                                    @selected(
                                        old('month', now()->month) == $month
                                    )
                                >
                                    {{ \Carbon\Carbon::create()->month($month)->format('F') }}
                                </option>
                            @endforeach
                        </select>

                        @error('month')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Year --}}
                    <div>
                        <label
                            for="year"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Year
                        </label>

                        <input
                            type="number"
                            id="year"
                            name="year"
                            value="{{ old('year', now()->year) }}"
                            min="2000"
                            max="2100"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >

                        @error('year')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Buttons --}}
                    <div class="flex items-center justify-end gap-3 border-t border-gray-200 pt-6">

                        <a
                            href="{{ route('budgets.index') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Save Budget
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>