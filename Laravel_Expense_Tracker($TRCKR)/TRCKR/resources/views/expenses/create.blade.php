<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Add Expense
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Record a new expense.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                <form
                    method="POST"
                    action="{{ route('expenses.store') }}"
                    class="space-y-6"
                >
                    @csrf

                    {{-- Description --}}
                    <div>
                        <label
                            for="description"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Description
                        </label>

                        <input
                            type="text"
                            id="description"
                            name="description"
                            value="{{ old('description') }}"
                            placeholder="e.g. Lunch at restaurant"
                            required
                            autofocus
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >

                        @error('description')
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
                            Amount
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
                                class="block w-full rounded-lg border-gray-300 pl-8 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >
                        </div>

                        @error('amount')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

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
                                Uncategorized
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

                        @error('category_id')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Expense date --}}
                    <div>
                        <label
                            for="expense_date"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Date
                        </label>

                        <input
                            type="date"
                            id="expense_date"
                            name="expense_date"
                            value="{{ old('expense_date', now()->format('Y-m-d')) }}"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >

                        @error('expense_date')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Payment method --}}
                    <div>
                        <label
                            for="payment_method"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Payment Method
                        </label>

                        <select
                            id="payment_method"
                            name="payment_method"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >
                            <option value="">
                                Select payment method
                            </option>

                            <option
                                value="cash"
                                @selected(old('payment_method') === 'cash')
                            >
                                Cash
                            </option>

                            <option
                                value="card"
                                @selected(old('payment_method') === 'card')
                            >
                                Card
                            </option>

                            <option
                                value="bank_transfer"
                                @selected(old('payment_method') === 'bank_transfer')
                            >
                                Bank Transfer
                            </option>

                            <option
                                value="other"
                                @selected(old('payment_method') === 'other')
                            >
                                Other
                            </option>
                        </select>

                        @error('payment_method')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Notes --}}
                    <div>
                        <label
                            for="notes"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Notes
                            <span class="font-normal text-gray-400">
                                (optional)
                            </span>
                        </label>

                        <textarea
                            id="notes"
                            name="notes"
                            rows="4"
                            placeholder="Additional notes..."
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >{{ old('notes') }}</textarea>

                        @error('notes')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Buttons --}}
                    <div class="flex items-center justify-end gap-3 border-t border-gray-200 pt-6">

                        <a
                            href="{{ route('expenses.index') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Save Expense
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>