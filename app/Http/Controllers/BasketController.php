<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\BasketItem;
use Illuminate\Http\Request;
use App\Services\BasketPricingService;

class BasketController extends Controller
{
    public function index(BasketPricingService $basketPricing)
    {
//        $basket = activeBasket()->load([
//            'basketItems' => fn($query) => $query->with([
//                'product' => fn($q) => $q->with(['category']),
//            ]),
//        ]);
//
//        $basketPricing->calc($basket);

        return view(
            'basket.index'
        /*, compact('basket','basketPricing')*/
        );
    }

    public function addToBasket(Product $product)
    {
        activeBasket()->addProduct($product);

        return back();

    }

    public function removeBasketItem(BasketItem $basketItem)
    {
        if (!activeBasket()->basketItems->contains($basketItem)) {
            abort(404);
        }

        $basketItem->delete();

        return back();
    }

}
