<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends MainModel
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function discountPrice():Attribute
    {
        return Attribute::make(
            get: fn () => $this->price - ($this->price * $this->discount / 100),
        );
    }

    public function discountValue():Attribute
    {
        return Attribute::make(
            get: fn() => $this->discount*$this->price/100,
        );
    }
}
