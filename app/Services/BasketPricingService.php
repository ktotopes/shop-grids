<?php

namespace App\Services;

use App\Models\Basket;

class BasketPricingService
{
    public float $subtotal = 0;
    public float $discount = 0;
    public float $total = 0;

    public function calc(Basket $basket): BasketPricingService
    {
        foreach ($basket->basketItems as $basketItem) {
            $this->subtotal += $basketItem->product->price * $basketItem->quantity;
            $this->discount += ($basketItem->product->discount*$basketItem->product->price/100) * $basketItem->quantity;
            $this->total += $basketItem->product->discountPrice * $basketItem->quantity;
        }

        return $this;
    }
}
