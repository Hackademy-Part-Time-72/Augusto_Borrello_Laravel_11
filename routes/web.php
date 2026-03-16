<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);