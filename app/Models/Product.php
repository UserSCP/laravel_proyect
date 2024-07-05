<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';

    protected $casts = [
        'price' => 'int'
    ];

    protected $fillable = ['name', 'price', 'brand_id'];
 
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getCategoryNamesAttribute()
    {
        return $this->categories->pluck('name')->implode(' - ');
    }
}
