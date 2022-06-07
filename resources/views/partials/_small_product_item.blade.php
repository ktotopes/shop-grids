<div class="single-list">
    <div class="list-image">
        <a href="{{route('products.show',$product)}}"><img src="https://via.placeholder.com/100x100" alt="#"></a>
    </div>
    <div class="list-info">
        <h3>
            <a href="{{route('products.show',$product)}}">{{$product->name}}</a>
        </h3>
        <span>{{money($product->price)}}</span>
    </div>
</div>
