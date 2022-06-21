<?php
namespace App\Composers;

use App\Models\Currency;
use Illuminate\View\View;
use App\Models\Languages;

class LanguagesComposer
{
    public function compose(View $view)
    {
        $view->with('languages',Languages::all());
    }
}
