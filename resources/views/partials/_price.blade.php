<div class="price">
    <span>{{money($product->discount_price)}}</span>
    @if($product->discount)
        <span class="discount-price">{{money($product->price)}}</span>
    @endif
</div>
