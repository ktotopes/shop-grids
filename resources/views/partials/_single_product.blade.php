<div @class($class ?? ['col-lg-4','col-md-6','col-12'])>
    <div class="single-product">
        <div class="product-image">
            <img src="https://via.placeholder.com/335x335" alt="#">

            @include('products.partials._product_badge',['product' => $product])


            <div class="button">
                <a href="{{route('basket.add-to-basket',$product)}}" class="btn"><i
                        class="lni lni-cart"></i> Add to Cart</a>
            </div>
        </div>
        <div class="product-info">
            <span class="category">{{$product->category->name}}</span>
            <h4 class="title">
                <a href="{{route('products.show',$product)}}">{{$product->name}}</a>
            </h4>
           @include('partials._review',['product' => $product])
            @include('partials._price',['product' => $product])
        </div>
    </div>
</div>
