<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');

