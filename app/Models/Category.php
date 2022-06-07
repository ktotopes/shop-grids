<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends MainModel
{
    public function categories():HasMany
    {
        return $this->hasMany(Category::class,'category_id','id');
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}
