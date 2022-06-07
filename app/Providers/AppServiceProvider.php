<?php

namespace App\Providers;

use App\Composers\CategoriesComposer;
use Illuminate\Support\Facades\View;
use App\Composers\BasketComposer;
use App\Services\BasketPricingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BasketPricingService::class, fn() => new BasketPricingService());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.partials._header', CategoriesComposer::class);

        View::composer('layouts.partials._header', BasketComposer::class);
        View::composer('basket.index', BasketComposer::class);
    }
}