<?php

use App\Http\Controllers\categoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
Route::resource('products', ProductsController::class);
Route::get('/', [productsController::class, 'index'])->name('products.index');
Route::put('/products/{p}', [ProductsController::class, 'update'])->name('products.update');
Route::resource('/products', productsController::class);
Route::get('/', [categoriesController::class, 'index'])->name('categories.index');
Route::put('/categories/{p}', [categoriesController::class, 'update'])->name('categories.update');
Route::resource('/categories', categoriesController::class);
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::resource('products', productsController::class);