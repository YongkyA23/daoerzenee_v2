<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProductCategoryController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/detailproduk', function () {
    return view('produk.detail');
});





Route::get('/products', [ProductCategoryController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductCategoryController::class, 'show'])->name('products.show');


Route::get('/galleries', [PhotoGalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/{slug}', [PhotoGalleryController::class, 'show'])->name('galleries.show');
