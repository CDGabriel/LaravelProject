<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user, Category $category){
        return $user->id === $category->user_id;
    }
    public function update(User $user, Category $expense): bool
    {
        return $user->id === $expense->user_id;
    }

    public function delete(User $user, Category $expense): bool
    {
        return $user->id === $expense->user_id;
    }
}
