<?php
namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactories extends Factory
{
    protected $model = ProductCategories::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
