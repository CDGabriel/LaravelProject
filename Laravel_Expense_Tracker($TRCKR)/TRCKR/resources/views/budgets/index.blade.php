<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Budgets
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Manage your monthly spending budgets.
                </p>
            </div>

            <a
                href="{{ route('budgets.create') }}"
                class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
            >
                + Add Budget
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200">

                {{-- Header --}}
                <div class="border-b border-gray-200 px-6 py-4">
                    <h3 class="font-semibold text-gray-900">
                        Your Budgets
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Monthly spending limits by category.
                    </p>
                </div>

                @forelse ($budgets as $budget)

                    <div class="border-b border-gray-200 px-6 py-5 last:border-b-0">

                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                            {{-- Budget information --}}
                            <div>

                                <div class="flex items-center gap-3">

                                    <h4 class="text-sm font-semibold text-gray-900">
                                        {{ $budget->category?->name ?? 'All Categories' }}
                                    </h4>

                                    @if ($budget->category)
                                        <span class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                            Category
                                        </span>
                                    @else
                                        <span class="inline-flex rounded-full bg-indigo-50 px-2.5 py-1 text-xs font-medium text-indigo-700">
                                            Overall
                                        </span>
                                    @endif

                                </div>

                                <div class="mt-2 flex flex-wrap gap-x-5 gap-y-1 text-sm text-gray-500">

                                    <span>
                                        Month:
                                        <strong class="text-gray-900">
                                            {{ \Carbon\Carbon::create()->month($budget->month)->format('F') }}
                                        </strong>
                                    </span>

                                    <span>
                                        Year:
                                        <strong class="text-gray-900">
                                            {{ $budget->year }}
                                        </strong>
                                    </span>

                                </div>

                            </div>

                            {{-- Amount --}}
                            <div class="flex items-center gap-6">

                                <div class="text-right">
                                    <p class="text-xs font-medium uppercase tracking-wide text-gray-500">
                                        Budget
                                    </p>

                                    <p class="mt-1 text-lg font-bold text-gray-900">
                                        €{{ number_format($budget->amount, 2) }}
                                    </p>
                                </div>

                                {{-- Actions --}}
                                <div class="flex items-center gap-4">

                                    <a
                                        href="{{ route('budgets.show', $budget) }}"
                                        class="text-sm font-medium text-gray-600 hover:text-gray-900"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ route('budgets.edit', $budget) }}"
                                        class="text-sm font-medium text-indigo-600 hover:text-indigo-800"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('budgets.destroy', $budget) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this budget?');"
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

                        </div>

                    </div>

                @empty

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
                            No budgets yet
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Create a monthly budget to start tracking your spending.
                        </p>

                        <div class="mt-6">
                            <a
                                href="{{ route('budgets.create') }}"
                                class="inline-flex rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700"
                            >
                                + Add Budget
                            </a>
                        </div>

                    </div>

                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>