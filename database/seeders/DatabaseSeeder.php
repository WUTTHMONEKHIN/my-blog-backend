<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::factory(10)
            //  ->has(
            //  Blog::factory(1)
        //  )
        //  ->create();
        //  Category::factory(10)->create();
        // Category::factory(10)
        // ->has(
            // Blog::factory(5)
        // )
        // ->create();

        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend', 'slug' => 'backend']);

        Blog::factory(10)
        ->has(
            Comment::factory(3)
        )
        ->create(['category_id' => $frontend->id]);

        Blog::factory(10)
        ->has(
            Comment::factory(3)
        )
        ->create(['category_id' => $backend->id]);
       
    }
}
