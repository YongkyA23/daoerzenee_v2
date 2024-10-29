<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{

    public function index()
    {
        // Fetch only "Banner" images for the carousel
        $bannerGalleries = Galeri::whereHas('kategoriFoto', function ($query) {
            $query->where('namaKategoriFoto', 'Banner');
        })->get();

        // Fetch non-"Banner" images for the gallery below the carousel
        $otherGalleries = Galeri::whereDoesntHave('kategoriFoto', function ($query) {
            $query->where('namaKategoriFoto', 'Banner');
        })->get();

        return view('galeri', compact('bannerGalleries', 'otherGalleries'));
    }
}
