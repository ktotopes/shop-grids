<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestSellers = Product::query()->inRandomOrder()->limit(3)->get();
        $newArrivals = Product::query()->inRandomOrder()->limit(3)->get();
        $topRated = Product::query()->inRandomOrder()->limit(3)->get();

        $trendingProduct = Product::query()->inRandomOrder()->limit(8)->with('category')->get();

        $specialOffer = [
            'threeProducts' => Product::query()->inRandomOrder()->limit(3)->with(['category'])->get(),
            'specialProduct' => Product::query()->inRandomOrder()->first(),
            'bottomProduct' => Product::query()->inRandomOrder()->latest()->first(),
        ];

        $headerProducts = [
            'sliderProducts' => Product::query()->inRandomOrder()->limit(2)->get(),
            'product' => Product::query()->inRandomOrder()->first(),
        ];

        return view('home',compact(
            'bestSellers',
            'newArrivals',
            'topRated',
            'trendingProduct',
            'specialOffer',
            'headerProducts'
        ));
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }
}
