<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (Category::count() == 0) {
            $firstCategory = Category::create([
                'name' => 'Self-referencing category',
                'parent_id' => null,
            ]);
            $firstCategory->update(['parent_id' => $firstCategory->id]);
        }

        Category::factory()->count(20)->create();
        User::factory(10)->create();
        Brand::factory(20)->create();
        Product::factory(20)->create();
        ProductCategories::factory(20)->create();
    }
}
