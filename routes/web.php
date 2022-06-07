<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
Route::get('/basket/add/{product}', [BasketController::class, 'addToBasket'])->name('basket.add-to-basket');
Route::get('/basket/remove/{basketItem}', [BasketController::class, 'removeBasketItem'])->name('basket.remove-basket-Item');


Route::group([
    'prefix' => 'profile',
    'as' => 'profile.',
    'middleware' => ['auth'],
],function (){
Route::get('dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
});
