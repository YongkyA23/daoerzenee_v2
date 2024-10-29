<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    // Method to get site settings for use in views
    public function index()
    {
        // Retrieve any necessary data, for example, SiteSettings
        $settings = SiteSetting::first();

        // Pass the data to the 'kontak' view
        return view('kontak', compact('settings'));
    }

    public static function getFooterSettings()
    {
        $settings = SiteSetting::first();
        view()->share('settings', $settings);
    }
}
