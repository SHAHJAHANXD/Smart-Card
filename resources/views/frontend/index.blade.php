@extends('frontend.layouts')

@section('title')
    Home - Smart Card
@endsection

@section('content')
    <main class="main">
        <section class="home-slider position-relative mb-30">
            {{-- <div class="container"> --}}
                <div class="home-slide-cover">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap"
                            style=" border-radius: 0px; background-image: url({{ asset('front') }}/imgs/slider/slider-1.png)">

                            <h1 class="display-2 mb-40" style="color: #fff;">
                                Don’t miss amazing<br /> grocery deals
                            </h1>
                            <p style="color: #fff;" class="mb-65">Sign up for the daily newsletter</p>
                            <button class="btn" style="background-color: #f1853e; border-radius: 30px;"
                                type="submit">View Categories</button>

                        </div>
                        <div class="single-hero-slider single-animation-wrap"
                            style=" border-radius: 0px; background-image: url({{ asset('front') }}/imgs/slider/slider-1.png)">

                            <h1 class="display-2 mb-40" style="color: #fff;">
                                Don’t miss amazing<br /> grocery deals
                            </h1>
                            <p style="color: #fff;" class="mb-65">Sign up for the daily newsletter</p>
                            <button class="btn" style="background-color: #f1853e; border-radius: 30px;"
                                type="submit">View Categories</button>

                        </div>
                        <div class="slider-arrow hero-slider-1-arrow"></div>
                    </div>
                </div>
            {{-- </div>     --}}
        </section>
        <!--End hero slider-->
        <!--End category slider-->
        <section class="banners mb-25">
            <div class="container">
                <br>
                <div class="section-title px-5 ml-15">
                    <div class="title">
                        <h3>Top Categories</h3>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                        id="carausel-10-columns-arrows"></div>
                </div>
                <div class="row px-3">
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Resturant
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Fashion
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Spoarts & Fitness
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Resturant
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Fashion
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Spoarts & Fitness
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Resturant
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Fashion
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 py-3">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text" style="top:90%">
                                <h4 style="color: #fff;">
                                    Spoarts & Fitness
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-25">
            <div class="section-title px-5 ml-10">
                <div class="title mtb-20">
                    <h3>Top Trending Deals</h3>
                </div>
                <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                    id="carausel-10-columns-arrows"></div>
            </div>
            <div class="container">
                <div class="row px-3">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top: 100%;">
                                <a href="#">
                                    <h4 style="color: #fff;"> </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top: 100%;">
                                <a href="#">
                                    <h4 style="color: #fff;"> </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('front') }}/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text" style="top: 100%;">
                                <a href="#">
                                    <h4 style="color: #fff;"> </h4>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--End banners-->
        <!--Products Tabs-->
        <section class="section-padding pb-5">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn px-5 ml-15">
                    <h3 class="mt-20 mb-20">Daily Best Sells</h3>
                    <!-- <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul> -->
                </div>
                <div class="row px-5">
                    <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                        <div class="banner-img style-2" style="height: 300px;">
                            <div class="banner-text">
                                <h2 class="mb-10" style="color: #fff;">Trendings Brands</h2>
                                <p style="color: #fff; ">People around you are loving these places</p><br>
                                <a href="#" class="btn "
                                    style="border: solid 2px #fff;
                            background-color: #126eb300;">See
                                    all Stores </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                        <div class="tab-content" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel"
                                aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 70px; height: 70px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">500+ Points</a></h2>
                                            </div>
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 80px; height: 80px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">50+ Points</a></h2>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 70px; height: 70px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">500+ Points</a></h2>
                                            </div>
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 80px; height: 80px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">50+ Points</a></h2>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 70px; height: 70px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">500+ Points</a></h2>
                                            </div>
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 80px; height: 80px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">50+ Points</a></h2>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 70px; height: 70px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">500+ Points</a></h2>
                                            </div>
                                            <div class="product-img-action-wrap"
                                                style="justify-content: center; display: flex;">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#"
                                                        style="border-radius: 300px; width: 80px; height: 80px;">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap"
                                                style="justify-content: center; display: flex;">
                                                <h2><a href="#">50+ Points</a></h2>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-10-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-10-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-15-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-15-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">Save 35%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Encore Seafoods Stuffed Alaskan</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-12-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-12-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Gorton’s Beer Battered Fish </a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-13-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-13-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Haagen-Dazs Caramel Cone Ice</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-14-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-14-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Italian-Style Chicken Meatball</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-7-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-7-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Perdue Simply Smart Organics Gluten Free</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-8-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-8-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">Save 35%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Seeds of Change Organic Quinoa</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-9-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-9-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Signature Wood-Fired Mushroom</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-13-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-13-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Simply Lemonade with Raspberry Juice</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                        <img class="default-img" src="{{ asset('front') }}/imgs/shop/product-14-1.jpg"
                                                            alt="" />
                                                        <img class="hover-img" src="{{ asset('front') }}/imgs/shop/product-14-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">Hodo Foods</a>
                                                </div>
                                                <h2><a href="#">Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
        <!--End Best Sales-->
        <!--End 4 columns-->
        <section class="main-content">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-6">
                        <h2 class="px-5 pl-50 mt-30 mb-30">Food Resturant</h2>
                    </div>
                    <div class="col-6">
                        <h5 class="px-5 mtb-50" style="float:right; color:#f4643a;">See All Stores</h5>
                    </div>
                </div>
                <br>
                <div class="row px-5">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Products Tabs-->
        <section class="main-content">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-6">
                        <h2 class="px-5 pl-50 mt-30 mb-30">Health, Beauty & Saloon</h2>
                    </div>
                    <div class="col-6">
                        <h5 class="px-5 mtb-50" style="float:right; color:#f4643a;">See All Stores</h5>
                    </div>
                </div>
                <br>
                <div class="row px-5">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Products Tabs-->
        <section class="main-content">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-6">
                        <h2 class="px-5 pl-50 mt-30 mb-30">Fashion</h2>
                    </div>
                    <div class="col-6">
                        <h5 class="px-5 mtb-50" style="float:right; color:#f4643a;">See All Stores</h5>
                    </div>
                </div>
                <br>
                <div class="row px-5">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-white p-3 mb-4 shadow" style="border-radius: 30px;">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="user-info">
                                    <div class="user-info__img">
                                        <img src="{{ asset('front') }}/imgs/shop/download.png" alt="">
                                    </div>
                                    <div class="user-info__basic">
                                        <h6 class="mb-0">KFC- GULSHAN BRANCH</h6>
                                        <div class="product-rate-cover">
                                            <span class="font-small ml-5 text-muted">Reviews (4.0)</span>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="mb-20">Offer Discounts:</h6>
                                    <a href="#!"><small
                                            style="background-color: #126eb3; color:white; border-radius: 20px; padding: 6px;">20%
                                            off</small></a>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0 text-center">Points:</h6>
                                    <a href="#!"><img src="{{ asset('front') }}/imgs/slider/points.png"
                                            style="height: 70x; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;"> Visit
                                Brand</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <H5 class="mtb-30 text-center" style="padding: 20px 20px; color: #F1853E;"><a href="#">See More</a>
            </H5>
        </div>
    </main>
@endsection
