<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $month = now()->month;
        $year = now()->year;


        $budgets = Budget::query()
            ->where('user_id', $user->id)
            ->where('month', $month)
            ->where('year', $year)
            ->with('category')
            ->get();

        $expenses = Expense::query()
            ->where('user_id', $user->id)
            ->whereYear('expense_date', $year)
            ->whereMonth('expense_date', $month)
            ->with('category')
            ->get();
        $totalSpent = $expenses->sum('amount');
        $nrExpenses = $expenses->count();
        $averageExpense = $expenses->average('amount') ?? 0;
        $spendingByCategory = $expenses
            ->groupBy(function ($expense) {
                return $expense->category?->name ?? 'Uncategorized';
            })
            ->map(function ($expenses) {
                return $expenses->sum('amount');
            });
        $budgets->each(function ($budget) use ($expenses) {

            $spent = $expenses
                ->when(
                    $budget->category_id !== null,
                    fn($expenses) => $expenses->where(
                        'category_id',
                        $budget->category_id
                    )
                )
                ->sum('amount');

            $budget->spent = $spent;

            $budget->remaining = $budget->amount - $spent;

            $budget->percentage = $budget->amount > 0
                ? ($spent / $budget->amount) * 100
                : 0;

            $budget->progress = min($budget->percentage, 100);
        });

        return view('dashboard.index', compact('budgets', 'totalSpent', 'averageExpense', 'nrExpenses', 'expenses','spendingByCategory'));
    }

}
