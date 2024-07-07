<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        $brand_id=Brand::inRandomOrder()->first()?->id ?? 1;
        return [
            'name'=>fake()->unique()->word(),
            'price'=>fake()->randomFloat(0,1000),
            'brand_id'=>$brand_id,
        ];
    }
}
