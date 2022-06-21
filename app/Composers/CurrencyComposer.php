<?php

namespace App\Composers;

use App\Models\Currency;
use Illuminate\View\View;

class CurrencyComposer
{
    public function compose(View $view)
    {
        $view->with('currencies',Currency::all());
    }
}
