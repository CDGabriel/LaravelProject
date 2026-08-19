<?php

namespace App\Policies;

use App\Models\Budget;
use App\Models\User;

class BudgetPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user, Budget $budget){
        return $user->id === $budget->user_id;
    }
    public function update(User $user, Budget $expense): bool
    {
        return $user->id === $expense->user_id;
    }

    public function delete(User $user, Budget $expense): bool
    {
        return $user->id === $expense->user_id;
    }
}
