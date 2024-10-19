<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the galleries.
     */
    public function index()
    {
        // Fetch all galleries with their categories
        $galleries = Galeri::with('kategoriFoto')->get();

        // Pass the data to the view
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Display the specified gallery by slug.
     */
    public function show($slug)
    {
        // Find the gallery by its slug instead of ID
        $gallery = Galeri::with('kategoriFoto')->where('slug', $slug)->firstOrFail();

        // Pass the data to the view
        return view('galleries.show', compact('gallery'));
    }
}
