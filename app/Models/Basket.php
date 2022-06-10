<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Basket extends MainModel
{
    public function addProduct(Product $product)
    {
        BasketItem::create([
            'basket_id' => $this->id,
            'product_id' => $product->id,
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function basketItems(): HasMany
    {
        return $this->hasMany(BasketItem::class, 'basket_id', 'id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'basket_items');
    }
}
