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
        $parentId = Category::inRandomOrder()->first()?->id ?? 1;
        return [
            'name'=>fake()->unique()->word(),
            'parent_id' => $parentId,
        ];
    }
}
