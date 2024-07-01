<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('brands', BrandController::class)->except(['show']);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('products', ProductsController::class)->except(['show']);



