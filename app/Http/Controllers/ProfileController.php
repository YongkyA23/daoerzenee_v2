<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        $teamMembers = TeamMember::with(['position', 'location'])->get();
        return view('profil', compact('teamMembers'));
    }
}
