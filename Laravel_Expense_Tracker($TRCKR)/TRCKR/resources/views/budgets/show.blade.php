<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Budget Details
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    View your budget and spending progress.
                </p>
            </div>

            <a href="{{ route('budgets.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
                ← Back to Budgets
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

            {{-- Main card --}}
            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                {{-- Header --}}
                <div class="border-b border-gray-200 px-6 py-5">
                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <p class="text-sm text-gray-500">
                                {{ $budget->category?->name ?? 'Overall Budget' }}
                            </p>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                {{ \Carbon\Carbon::create()
    ->month($budget->month)
    ->format('F') }}
                                {{ $budget->year }}
                            </h3>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">

                            {{-- Budget --}}
                            <div class="rounded-lg bg-gray-50 p-4">
                                <p class="text-sm font-medium text-gray-500">
                                    Budget
                                </p>

                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    €{{ number_format($budget->amount, 2) }}
                                </p>
                            </div>

                            {{-- Spent --}}
                            <div class="rounded-lg bg-gray-50 p-4">
                                <p class="text-sm font-medium text-gray-500">
                                    Spent
                                </p>

                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    €{{ number_format($spent, 2) }}
                                </p>
                            </div>

                            {{-- Remaining --}}
                            <div class="rounded-lg bg-gray-50 p-4">
                                <p class="text-sm font-medium text-gray-500">
                                    Remaining
                                </p>

                                <p
                                    class="mt-1 text-2xl font-bold {{ $remaining < 0 ? 'text-red-600' : 'text-green-600' }}">
                                    €{{ number_format($remaining, 2) }}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

                {{-- Budget information --}}
                <div class="divide-y divide-gray-200">

                    {{-- Category --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Category
                        </div>

                        <div class="text-sm text-gray-900 sm:col-span-2">
                            @if ($budget->category)
                                <span
                                    class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                    {{ $budget->category->name }}
                                </span>
                            @else
                                <span
                                    class="inline-flex rounded-full bg-indigo-50 px-2.5 py-1 text-xs font-medium text-indigo-700">
                                    All Categories
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Month --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Month
                        </div>

                        <div class="text-sm text-gray-900 sm:col-span-2">
                            {{ \Carbon\Carbon::create()
    ->month($budget->month)
    ->format('F') }}
                        </div>
                    </div>

                    {{-- Year --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Year
                        </div>

                        <div class="text-sm text-gray-900 sm:col-span-2">
                            {{ $budget->year }}
                        </div>
                    </div>

                    {{-- Budget amount --}}
                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                        <div class="text-sm font-medium text-gray-500">
                            Budget Amount
                        </div>

                        <div class="text-sm font-semibold text-gray-900 sm:col-span-2">
                            €{{ number_format($budget->amount, 2) }}
                        </div>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-between border-t border-gray-200 bg-gray-50 px-6 py-4">

                    <form method="POST" action="{{ route('budgets.destroy', $budget) }}"
                        onsubmit="return confirm('Are you sure you want to delete this budget?');">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            class="rounded-lg px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50">
                            Delete Budget
                        </button>
                    </form>

                    <div class="flex items-center gap-3">

                        <a href="{{ route('budgets.index') }}"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Back
                        </a>

                        <a href="{{ route('budgets.edit', $budget) }}"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>