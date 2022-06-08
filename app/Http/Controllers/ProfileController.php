<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('profile.dashboard');
    }
}
