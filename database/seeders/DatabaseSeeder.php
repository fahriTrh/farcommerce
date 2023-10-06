<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '1234'
        ]);

        // Category::create([
        //     'name' => 'Top',
        //     'slug' => 'top',
        // ]);

        // Category::create([
        //     'name' => 'Outer',
        //     'slug' => 'outer',
        // ]);

        // Category::create([
        //     'name' => 'Skirt',
        //     'slug' => 'skirt',
        // ]);

        // Category::create([
        //     'name' => 'Pants',
        //     'slug' => 'pants',
        // ]);

        // Category::create([
        //     'name' => 'Accessories',
        //     'slug' => 'Accessories',
        // ]);

        // Product::factory(50)->create();
    }
}
