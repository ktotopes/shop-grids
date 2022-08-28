<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Models\BasketItem;
use App\Services\BasketPricingService;

class BasketComposer
{
    public function compose(View $view)
    {
        $basket = activeBasket()->load([
            'basketItems' => fn($query) => $query->with([
                'product' => fn($q) => $q->with(['category']),
            ]),
        ]);
        
        $basketPricing = new BasketPricingService();
        $basketPricing->calc($basket);

        $view->with('basket', $basket);
        $view->with('basketPricing', $basketPricing);
    }
}
