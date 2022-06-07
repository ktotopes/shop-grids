<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends MainModel
{
    public function basket():BelongsTo
    {
        return $this->belongsTo(Basket::class,'basket_id','id');
    }

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
