<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::resource('products', ProductsController::class)->except(['show']);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('brands', BrandController::class)->except(['show']);



