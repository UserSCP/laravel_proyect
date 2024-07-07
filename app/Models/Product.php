<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function Pest\Laravel\get;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'products';

    protected $casts = [
        'price' => 'int'
    ];

    protected $fillable = ['name', 'price', 'brand_id'];
 
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
    public function getCategoryNamesAttribute()
    {
        return $this->categories->pluck('name')->implode(', ');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function getPriceWithTaxAttribute()
    {
        $price= $this->getAttribute('price');
        return $price*1.8;
    }

}
