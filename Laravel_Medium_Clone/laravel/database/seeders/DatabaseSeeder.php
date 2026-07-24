<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "name"=> "John Doe",
            "username"=> "testuser",
            "email"=> "test@example.com",
        ]);
     $categories=[
        'Technology',
        'Health',
        'Sports',
        'Politics',
        'Entertainement',
     ];
     foreach ($categories as $category) {
        Category::create(['name'=>$category]);
    }
    // Post::factory(100)->create();


}
}