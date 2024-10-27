<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of product categories and their related products.
     */
    public function index()
    {
        // Fetch all categories with their related products
        $categories = KategoriProduk::with('produk')->get();

        // Pass the data to the view
        return view('products.index', compact('categories'));
    }

    /**
     * Display a single category and its products.
     *
     * @param string $slug
     */
    public function show($slug)
    {
        // Find the category by its slug
        $category = KategoriProduk::with('produk')->where('slug', $slug)->firstOrFail();

        // Pass the category and its products to the view
        return view('products.show', compact('category'));
    }
}
