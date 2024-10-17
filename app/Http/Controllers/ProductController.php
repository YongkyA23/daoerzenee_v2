<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch and display all products
    public function index()
    {
        $products = Produk::with('kategoriProduk')->get();

        // Pass the data to the view
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        // Find the product by its slug instead of ID
        $product = Produk::with('kategoriProduk')->where('slug', $slug)->firstOrFail();

        return view('products.show', compact('product'));
    }
}
