<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use App\Http\Requests\StoreExpenseRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = auth()->user()
            ->expenses()
            ->with('category')
            ->latest('expense_date')
            ->paginate(15);

        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = auth()->user()->categories;

        return view('expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Expense::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'description' => $request->description,
            'expense_date' => $request->expense_date,
            'payment_method' => $request->payment_method,
            'notes' => $request->notes,
        ]);

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Expense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        Gate::authorize('view', $expense);
        $expense->load('category');
        return view('expenses.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        Gate::authorize('update', $expense);
        $categories = auth()->user()->categories;
        return view('expenses.edit', compact('expense','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
{
    Gate::authorize('update', $expense);

    $expense->update($request->validated());

    return redirect()
        ->route('expenses.index')
        ->with('success', 'Expense updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        Gate::authorize('delete', $expense);

        $expense->delete();

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Expense deleted successfully.');
    }
}
