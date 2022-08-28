<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->input('term');
        $price = $request->input('range');

        $products = Product::query()->with(['category'])
            ->where('name','like',"%$term%")
            ->where('price','<',"$price")
            ->orderBy('mark','desc')
            ->paginate(9);

        return view('products.index', compact('products'));
    }
    public function show(Product $product)
    {
//        $product = Product::query()->where('id',$product->id)->first();

        return view('products.show',compact('product'));
    }
}
