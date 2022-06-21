<header class="header navbar-area">
    <!-- Start Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="select4">
                                        @foreach($currencies as $currency)
                                            <option
                                                value="{{$currency->name}}">{{$currency->symbol}} {{$currency->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="select-position">
                                    <select id="select5">
                                        @foreach($languages as $language)
                                            <option
                                                value="{{$language->iso2}}" @selected(app()->getLocale() == $language->iso2)>{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about-us')}}">About Us</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-end">
                        <div class="user">
                            <i class="lni lni-user"></i>
                            @php
                                app()->setLocale('ru')
                            @endphp
                            {{ __('site.hello') }}
                        </div>
                        <ul class="user-login">
                            @auth()
                                <li>
                                    <a href="{{route('profile.dashboard')}}">{{auth()->user()->name}}</a>
                                </li>
                                @if(auth()->user()->is_admin)
                                    <li>
                                        <a href="{{route('admin.index')}}">Adminka</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button>Logout</button>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('login')}}">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">
                    <!-- Start Header Logo -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('theme/images/logo/logo.svg')}}" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">
                    <!-- Start Main Menu Search -->
                    <div class="main-menu-search">
                        <!-- navbar search start -->
                        <div class="navbar-search search-style-5">
                            <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>All</option>
                                        <option value="1">option 01</option>
                                        <option value="2">option 02</option>
                                        <option value="3">option 03</option>
                                        <option value="4">option 04</option>
                                        <option value="5">option 05</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-input">
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>
                        <!-- navbar search Ends -->
                    </div>
                    <!-- End Main Menu Search -->
                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline:
                                <span>(+100) 123 456 7890</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="javascript:void(0)">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="{{route('basket.index')}}" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">{{$basket->basketItems->count()}}</span>
                                </a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{$basket->basketItems->count()}} Items</span>
                                        <a href="{{route('basket.index')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        @foreach($basket->basketItems as $basketItem )
                                            <li>
                                                <a href="{{route('basket.remove-basket-Item',$basketItem)}}"
                                                   class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img"
                                                       href="{{route('products.show',$basketItem->product)}}"><img
                                                            src="https://via.placeholder.com/100x100"
                                                            alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="{{route('products.show',$basketItem->product)}}">
                                                            {{$basketItem->product->name}}</a></h4>
                                                    <p class="quantity">1x - <span
                                                            class="amount">{{money($basketItem->product->discount_price)}}</span>
                                                    </p>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">{{money($basketPricing->total)}}</span>
                                        </div>
                                        <div class="button">
                                            <a href="checkout.html" class="btn animate">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Middle -->
    <!-- Start Header Bottom -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <!-- Start Mega Category Menu -->
                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                        <ul class="sub-category">
                            {{--                            <li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>--}}
                            {{--                                <ul class="inner-sub-category">--}}
                            {{--                                    <li><a href="product-grids.html">Digital Cameras</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Camcorders</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Camera Drones</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Smart Watches</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Headphones</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">MP3 Players</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Microphones</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Chargers</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Batteries</a></li>--}}
                            {{--                                    <li><a href="product-grids.html">Cables & Adapters</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            @foreach($categories as $category)
                                <li><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Mega Category Menu -->
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                       aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                        <li class="nav-item"><a href="faq.html">Faq</a></li>
                                        <li class="nav-item"><a href="login.html">Login</a></li>
                                        <li class="nav-item"><a href="register.html">Register</a></li>
                                        <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                        <li class="nav-item"><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('products.index')}}">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                       aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                        </li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                        <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                                Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Nav Social -->
                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Social -->
            </div>
        </div>
    </div>
    <!-- End Header Bottom -->
</header>
