<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

Route::get('/', [productsController::class, 'index'])->name('products.index');
Route::put('/products/{p}', [ProductsController::class, 'update'])->name('products.update');
Route::resource('/products', productsController::class);