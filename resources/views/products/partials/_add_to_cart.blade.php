@if(!$basket->products->contains($product))
    <a href="{{route('basket.add-to-basket',$product)}}" class="btn" style="{{$style ?? ''}}">
        <i class="lni lni-cart"></i>
        Add to Cart
    </a>
@else
    <a href="{{route('basket.index')}}" class="btn" style="{{$style ?? ''}}">Go to basket</a>
@endif
