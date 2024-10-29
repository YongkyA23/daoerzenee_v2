<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SiteSettingsController;




Route::get('/kontak', [SiteSettingsController::class, 'index']);

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/detailproduk', function () {
    return view('produk.detail');
});



Route::get('/', [ProductCategoryController::class, 'welcome'])->name('welcome');

Route::get('/products', [ProductCategoryController::class, 'index'])->name('products.index');

Route::get('/categories/{slug}', [ProductCategoryController::class, 'show'])->name('categories.show');

Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.detail');



Route::get('/galleries', [PhotoGalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/{slug}', [PhotoGalleryController::class, 'show'])->name('galleries.show');
