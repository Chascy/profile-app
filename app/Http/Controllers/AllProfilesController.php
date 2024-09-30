<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllProfile;

class AllProfilesController extends Controller
{
    public function getAllProfiles(){
        $profiles = AllProfile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function getProfile($id){
        $profile = AllProfile::find($id);
        return view('profile', ['profile' => $profile]);
    }
}
