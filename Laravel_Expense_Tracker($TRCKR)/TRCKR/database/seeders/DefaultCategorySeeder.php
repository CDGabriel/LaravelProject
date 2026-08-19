<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Food',
            'Transport',
            'Housing',
            'Utilities',
            'Entertainment',
            'Shopping',
            'Healthcare',
            'Education',
            'Travel',
            'Subscriptions',
            'Other',
        ];

        User::query()
            ->each(function (User $user) use ($categories) {

                foreach ($categories as $category) {
                    Category::firstOrCreate([
                        'user_id' => $user->id,
                        'name' => $category,
                    ]);
                }

            });
    }
}