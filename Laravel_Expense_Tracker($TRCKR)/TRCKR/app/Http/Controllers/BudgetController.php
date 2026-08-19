<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBudgetRequest;
use App\Models\Budget;
use App\Models\Expense;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = auth()->user()
            ->budgets()
            ->with('category')
            ->latest()
            ->get();

        return view('budgets.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = auth()->user()
            ->categories()
            ->orderBy('name')
            ->get();

        return view('budgets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Budget::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'month' => $request->month,
            'year' => $request->year,
        ]);

        return redirect()
            ->route('budgets.index')
            ->with('success', 'Budget created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Budget $budget)
    {
        Gate::authorize('view', $budget);

        $budget->load('category');
        $spent = Expense::query()
            ->where('user_id', auth()->id())
            ->whereYear('expense_date', $budget->year)
            ->whereMonth('expense_date', $budget->month)
            ->when(
                $budget->category_id !== null,
                fn($query) => $query->where(
                    'category_id',
                    $budget->category_id
                )
            )
            ->sum('amount');

        $remaining = $budget->amount - $spent;

        return view('budgets.show', compact(
            'budget',
            'spent',
            'remaining'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget)
    {
        Gate::authorize('update', $budget);

        $categories = auth()->user()
            ->categories()
            ->orderBy('name')
            ->get();

        return view('budgets.edit', compact('budget', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBudgetRequest $request, Budget $budget)
    {
        Gate::authorize('update', $budget);

        $budget->update($request->validated());

        return redirect()
            ->route('budgets.show', $budget)
            ->with('success', 'Budget updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        Gate::authorize('delete', $budget);
        $budget->delete();
        return redirect()
            ->route('budgets.index')
            ->with('success', 'Budget deleted successfully.');
    }
}
