<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->with(['category'])->paginate(9);

        return view('products.index', compact('products'));
    }
    public function show(Product $product)
    {
//        $product = Product::query()->where('id',$product->id)->first();

        return view('products.show',compact('product'));
    }
}
