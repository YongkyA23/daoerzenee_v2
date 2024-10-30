<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Retrieve all team members with their positions and locations
        $teamMembers = TeamMember::with(['position', 'location'])->get();

        // Pass the data to the profil view
        return view('profil', compact('teamMembers'));
    }
}
