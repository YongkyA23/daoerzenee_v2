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
        // Fetch the single category by its slug, along with related products
        $category = KategoriProduk::with('produk')->where('slug', $slug)->firstOrFail();
        // Pass the single category to the view
        return view('categories.show', compact('category'));
    }


    public function welcome()
    {
        // Fetch all categories with their related products
        $categories = KategoriProduk::with('produk')->get();

        // Pass the data to the view
        return view('welcome', compact('categories'));
    }
}
