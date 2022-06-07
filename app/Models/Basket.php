<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
