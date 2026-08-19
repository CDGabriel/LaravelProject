<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Expenses
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Manage your expenses and track your spending.
                </p>
            </div>

            <a
                href="{{ route('expenses.create') }}"
                class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
            >
                + Add Expense
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                {{-- Table header --}}
                <div class="border-b border-gray-200 px-6 py-4">
                    <h3 class="font-semibold text-gray-900">
                        All Expenses
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        A list of all your recorded expenses.
                    </p>
                </div>

                @if ($expenses->count())

                    {{-- Desktop table --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Date
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Description
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Category
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Payment
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Amount
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500"
                                    >
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($expenses as $expense)
                                    <tr class="hover:bg-gray-50">

                                        {{-- Date --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                            {{ $expense->expense_date->format('M d, Y') }}
                                        </td>

                                        {{-- Description --}}
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $expense->description }}
                                            </div>

                                            @if ($expense->notes)
                                                <div class="mt-1 max-w-xs truncate text-xs text-gray-500">
                                                    {{ $expense->notes }}
                                                </div>
                                            @endif
                                        </td>

                                        {{-- Category --}}
                                        <td class="whitespace-nowrap px-6 py-4">
                                            @if ($expense->category)
                                                <span
                                                    class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700"
                                                >
                                                    {{ $expense->category->name }}
                                                </span>
                                            @else
                                                <span class="text-sm text-gray-400">
                                                    Uncategorized
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Payment method --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                            {{ $expense->payment_method ?? '—' }}
                                        </td>

                                        {{-- Amount --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-right">
                                            <span class="text-sm font-semibold text-gray-900">
                                                €{{ number_format($expense->amount, 2) }}
                                            </span>
                                        </td>

                                        {{-- Actions --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                                            <div class="flex justify-end gap-3">

                                                <a
                                                    href="{{ route('expenses.show', $expense) }}"
                                                    class="font-medium text-gray-600 hover:text-gray-900"
                                                >
                                                    View
                                                </a>

                                                <a
                                                    href="{{ route('expenses.edit', $expense) }}"
                                                    class="font-medium text-indigo-600 hover:text-indigo-800"
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
                                                        class="font-medium text-red-600 hover:text-red-800"
                                                    >
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    @if ($expenses->hasPages())
                        <div class="border-t border-gray-200 px-6 py-4">
                            {{ $expenses->links() }}
                        </div>
                    @endif

                @else

                    {{-- Empty state --}}
                    <div class="px-6 py-16 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100">
                            <svg
                                class="h-6 w-6 text-gray-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>

                        <h3 class="mt-4 text-sm font-semibold text-gray-900">
                            No expenses yet
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Start tracking your spending by adding your first expense.
                        </p>

                        <div class="mt-6">
                            <a
                                href="{{ route('expenses.create') }}"
                                class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
                            >
                                + Add Expense
                            </a>
                        </div>

                    </div>

                @endif

            </div>
        </div>
    </div>
</x-app-layout>