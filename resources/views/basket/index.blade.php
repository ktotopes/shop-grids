@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs',['pageName' => 'basket'])
    <div class="shopping-cart section">
        <div class="container">
            @if($basket->basketItems->count())
                <div class="cart-list-head">
                    <!-- Cart List Title -->
                    <div class="cart-list-title">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-12">

                            </div>
                            <div class="col-lg-4 col-md-3 col-12">
                                <p>Product Name</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>Quantity</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>Subtotal</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>Discount</p>
                            </div>
                            <div class="col-lg-1 col-md-2 col-12">
                                <p>Remove</p>
                            </div>
                        </div>
                    </div>
                    @foreach($basket->basketItems as $basketItem)
                        <div class="cart-single-list">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1 col-12">
                                    <a href="{{route('products.show',$basketItem->product)}}"><img
                                            src="https://via.placeholder.com/220x200" alt="#"></a>
                                </div>
                                <div class="col-lg-4 col-md-3 col-12">
                                    <h5 class="product-name">
                                        <a href="{{route('products.show',$basketItem->product)}}">
                                            {{$basketItem->product->name}}
                                        </a>
                                    </h5>
                                    <p class="product-des">
                                        <span><em>Category:</em> {{$basketItem->product->category->name}}</span>
                                        <span><em>Mark:</em> {{$basketItem->product->mark}}</span>
                                    </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <div class="count-input">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{money($basketItem->product->price*$basketItem->quantity)}}</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{money($basketItem->product->discount_value*$basketItem->quantity)}}</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-12">
                                    <a class="remove-item" href="{{route('basket.remove-basket-Item',$basketItem)}}"><i
                                            class="lni lni-close"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div>
                    <h2>Basket is empty</h2>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <div class="button">
                                                <button class="btn">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Subtotal<span>{{money($basketPricing->subtotal)}}</span></li>
                                        {{--                                        <li>Shipping<span>Free</span></li>--}}
                                        <li>Discount<span>{{money($basketPricing->discount)}}</span></li>
                                        <li class="last">Total<span>{{money($basketPricing->total)}}</span></li>
                                    </ul>
                                    <div class="button">
                                        <a href="checkout.html" class="btn">Checkout</a>
                                        <a href="{{route('products.index')}}" class="btn btn-alt">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
@endsection
