<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $term = '';
        $data = Product::query()
            ->where(function ($query) use ($term) {
                return $query->where('name', 'like', "%{$term}%")
                    ->orWhere('description', 'like', "%{$term}%")
                    ->orWhere('details', 'like', "%{$term}%");
            })
            ->where('discount', '>', 0)
            ->where('price', '<', 500)
            ->where('quantity', '<', 15)
            ->where('is_new', '=', 1)
            ->where('created_at', '>', now()->addDays(-30))
            ->where('created_at', '<', now())
            ->whereIn('category_id',[2,3])
            ->orderBy('name','asc')
            ->orderBy('price','desc')
            ->get();
        dd($data->toArray());
        return view('admin.index');
    }
}
