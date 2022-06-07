<?php

use App\Models\User;
use App\Models\Basket;
use Illuminate\Support\Facades\Auth;

if (!function_exists('user')) {
    function user(): ?User
    {
        return Auth::user() ?? null;
    }
}

if (!function_exists('money')) {
    function money(
        float $amount,
        string $currency = '$',
        int $decimals = 2,
        string $decPoint = '.',
        string $thousandsSep = ','
    ): string {
        $sign = $amount < 0;
        return ($sign ? '-' : '') . $currency . '' . number_format(abs($amount), $decimals, $decPoint, $thousandsSep);
    }
}

if (!function_exists('activeBasket')) {
    function activeBasket(): Basket
    {
        if (session()->has('basketId')){
           return Basket::query()->where('id',session()->get('basketId'))->first();
        }

        $basket = new Basket();
        $basket->save();

        session()->put('basketId',$basket->id);

        return $basket;
    }
}


