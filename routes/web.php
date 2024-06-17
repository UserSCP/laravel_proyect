<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\brandController;

Route::get('/', function () {return view('welcome');})->name('home');
Route::resource('products', ProductsController::class);
Route::resource('categories', categoryController::class);
Route::resource('brands', BrandController::class);



