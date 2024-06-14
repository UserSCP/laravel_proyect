<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'stock'];

    public static function stockOptions()
    {
        return [
            'sin stock' => 'Sin Stock',
            'poco stock' => 'Poco Stock',
            'en stock' => 'En Stock',
        ];
    }
}
