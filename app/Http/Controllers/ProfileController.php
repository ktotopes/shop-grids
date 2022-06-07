<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('profile.dashboard');
    }
}
