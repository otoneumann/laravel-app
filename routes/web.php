<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::resource('categories', CategoryController::class);

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('product.')
    ->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');

    Route::get('/create', [ProductController::class, 'create'])->name('create');

    Route::post('/store', [ProductController::class, 'store'])->name('store');

    Route::get('/{product}', [ProductController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');

    Route::patch('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});


