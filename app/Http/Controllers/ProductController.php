<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch and display all products
    public function index()
    {
        // Fetch products along with categories and images
        $products = Produk::with(['kategoriProduk', 'images'])->get();

        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        // Fetch single product with category and images by slug
        $product = Produk::with(['kategoriProduk', 'images'])->where('slug', $slug)->firstOrFail();

        return view('products.detail', compact('product'));
    }
}
