<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::view('/home', 'home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
