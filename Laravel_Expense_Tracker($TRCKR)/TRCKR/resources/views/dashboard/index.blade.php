<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Here's an overview of your expenses.
                </p>
            </div>

            <a href="{{ route('expenses.create') }}"
                class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                + Add Expense
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">

            {{-- Statistics --}}
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                    <p class="text-sm font-medium text-gray-500">
                        Total Spent
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        €{{ $totalSpent }}
                    </p>

                    <p class="mt-2 text-xs text-gray-500">
                        This month
                    </p>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                    <p class="text-sm font-medium text-gray-500">
                        Expenses
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        {{ $nrExpenses }}
                    </p>

                    <p class="mt-2 text-xs text-gray-500">
                        This month
                    </p>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                    <p class="text-sm font-medium text-gray-500">
                        Average Expense
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        €{{ number_format($averageExpense,2) }}
                    </p>

                    <p class="mt-2 text-xs text-gray-500">
                        This month
                    </p>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                    @forelse ($budgets as $budget)
                        <p class="text-sm font-medium text-gray-500">
                            Budget Remaining
                        </p>
                        <p class="mt-2 text-3xl font-bold {{ $budget->remaining < 0 ? 'text-red-600' : 'text-green-600' }}">
                            €{{ number_format($budget->remaining, 2) }}
                        </p>

                        <p class="mt-2 text-xs text-gray-500">
                            This month
                        </p>

                    @empty

                        <div class="rounded-xl bg-white px-6 py-10 text-center shadow-sm ring-1 ring-gray-200">

                            <h3 class="text-sm font-semibold text-gray-900">
                                No budget for this month
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Create a budget to start tracking your spending.
                            </p>

                            <a href="{{ route('budgets.create') }}"
                                class="mt-4 inline-flex rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                                + Add Budget
                            </a>

                        </div>

                    @endforelse
                </div>
            </div>
            {{-- Main content --}}
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

                {{-- Recent expenses --}}
                <div class="lg:col-span-2 rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                    <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Recent Expenses
                            </h3>

                            <p class="text-sm text-gray-500">
                                Your latest transactions
                            </p>
                        </div>

                        <a href="{{ route('expenses.index') }}"
                            class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
                            View all
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Description
                                    </th>

                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Category
                                    </th>

                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Date
                                    </th>

                                    <th
                                        class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Amount
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">

                                @forelse ($expenses as $expense)

                                    <tr class="hover:bg-gray-50">

                                        {{-- Description --}}
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                            {{ $expense->description }}
                                        </td>

                                        {{-- Category --}}
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $expense->category?->name ?? 'Uncategorized' }}
                                        </td>

                                        {{-- Date --}}
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $expense->expense_date->format('M d, Y') }}
                                        </td>

                                        {{-- Amount --}}
                                        <td class="px-6 py-4 text-right text-sm font-semibold text-gray-900">
                                            €{{ $expense->amount }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-center text-sm text-gray-500">
                                            No expenses yet.

                                            <a href="{{ route('expenses.create') }}"
                                                class="font-medium text-indigo-600 hover:text-indigo-800">
                                                Add your first expense
                                            </a>
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Categories --}}
                <div class="rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="font-semibold text-gray-900">
                            Spending by Category
                        </h3>

                        <p class="text-sm text-gray-500">
                            This month's spending
                        </p>
                    </div>

                    @if ($spendingByCategory->isNotEmpty())

                        <div class="mx-auto max-w-md">
                            <canvas id="spendingByCategoryChart" data-spending='@json($spendingByCategory)'></canvas>
                        </div>

                    @else

                        <div class="py-12 text-center">
                            <p class="text-sm text-gray-500">
                                No expenses recorded this month.
                            </p>
                        </div>

                    @endif

                </div>

            </div>

            {{-- Quick actions --}}
            <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200">

                <h3 class="font-semibold text-gray-900">
                    Quick Actions
                </h3>

                <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-3">

                    <a href="{{ route('expenses.create') }}"
                        class="rounded-lg border border-gray-200 p-4 hover:bg-gray-50">
                        <p class="font-medium text-gray-900">
                            Add Expense
                        </p>

                        <p class="mt-1 text-sm text-gray-500">
                            Record a new expense.
                        </p>
                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="rounded-lg border border-gray-200 p-4 hover:bg-gray-50">
                        <p class="font-medium text-gray-900">
                            Manage Categories
                        </p>

                        <p class="mt-1 text-sm text-gray-500">
                            Add or edit your categories.
                        </p>
                    </a>

                    <a href="{{ route('budgets.index') }}"
                        class="rounded-lg border border-gray-200 p-4 hover:bg-gray-50">
                        <p class="font-medium text-gray-900">
                            Manage Budgets
                        </p>

                        <p class="mt-1 text-sm text-gray-500">
                            Set and track your budgets.
                        </p>
                    </a>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>