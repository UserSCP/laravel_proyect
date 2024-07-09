<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition(): array
    {
        $randomCategory = Category::inRandomOrder()->first();
        
        return [
            'name' => $this->faker->unique()->word(),
            'parent_id' => $randomCategory ? $randomCategory->id : null,
        ];
    }
}
