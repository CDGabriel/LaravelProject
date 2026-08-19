<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Expense Details
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    View the details of this expense.
                </p>
            </div>

            <a
                href="{{ route('expenses.index') }}"
                class="text-sm font-medium text-indigo-600 hover:text-indigo-800"
            >
                ← Back to Expenses
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                {{-- Header --}}
                <div class="border-b border-gray-200 px-6 py-5">
                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <p class="text-sm text-gray-500">
                                Expense
                            </p>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                {{ $expense->description }}
                            </h3>
                        </div>

                        <div class="text-right">
                            <p class="text-2xl font-bold text-gray-900">
                                €{{ $expense->amount }}
                            </p>
                        </div>

                    </div>
                </div>

                {{-- Details --}}
                <div class="divide-y divide-gray-200">

                    {{-- Category --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Category
                        </div>

                        <div class="text-sm text-gray-900 sm:col-span-2">
                            @if ($expense->category)
                                <span class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                    {{ $expense->category->name }}
                                </span>
                            @else
                                <span class="text-gray-500">
                                    Uncategorized
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Date --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Date
                        </div>

                        <div class="text-sm text-gray-900 sm:col-span-2">
                            {{ $expense->expense_date->format('F d, Y') }}
                        </div>
                    </div>

                    {{-- Payment method --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Payment Method
                        </div>

                        <div class="text-sm capitalize text-gray-900 sm:col-span-2">
                            {{ $expense->payment_method
                                ? str_replace('_', ' ', $expense->payment_method)
                                : 'Not specified'
                            }}
                        </div>
                    </div>

                    {{-- Amount --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Amount
                        </div>

                        <div class="text-sm font-semibold text-gray-900 sm:col-span-2">
                            €{{ $expense->amount }}
                        </div>
                    </div>

                    {{-- Notes --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Notes
                        </div>

                        <div class="whitespace-pre-line text-sm text-gray-900 sm:col-span-2">
                            {{ $expense->notes ?: 'No notes.' }}
                        </div>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-end gap-3 border-t border-gray-200 bg-gray-50 px-6 py-4">

                    <a
                        href="{{ route('expenses.index') }}"
                        class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-white"
                    >
                        Back
                    </a>

                    <a
                        href="{{ route('expenses.edit', $expense) }}"
                        class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
                    >
                        Edit
                    </a>

                    <form
                        method="POST"
                        action="{{ route('expenses.destroy', $expense) }}"
                        onsubmit="return confirm('Are you sure you want to delete this expense?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700"
                        >
                            Delete
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>