<?php

namespace App\Composers;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $view->with('categories',Category::all());
    }
}
