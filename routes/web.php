<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoGalleryController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');


Route::get('/galleries', [PhotoGalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/{slug}', [PhotoGalleryController::class, 'show'])->name('galleries.show');
