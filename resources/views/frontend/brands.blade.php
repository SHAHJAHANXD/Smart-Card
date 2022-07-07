@extends('frontend.layouts')
@section('title')
Brand - Smart Card
@endsection
@section('content')
    <main class="main">
        <div class="container">
            <div class="" style="background: url({{ asset('front') }}/imgs/slider/slider-2.png); padding:auto">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 col-md-4 primary-sidebar sticky-sidebar px-3">
                        <div class="sidebar-widget widget-store-info mtb-30" style="background-color: #fff !important;">
                            <h6 class="text-center">Be a Part of our Family!</h6>
                            <div class="card-footer mt-2"style="border-radius: 10px; color: black;"><i
                                    class="fa fa-envelope" aria-hidden="true"></i><a href="#"
                                    style="justify-content:center;">Sign in With Email</a></div>
                            <div class="card-footer mt-2"style="border-radius: 10px; color: black;"><i class="fa fa-google"
                                    aria-hidden="true"></i><a href="#">Sign in With Google</a></div>
                            <div class="card-footer mt-2"style="border-radius: 10px; color: black;"><i
                                    class="fa fa-facebook" aria-hidden="true"></i><a href="#">Sign in With
                                    Facebook</a></div>
                            <div class="card-footer mt-2"style="border-radius: 10px; color: black;"><i class="fa fa-apple"
                                    aria-hidden="true"></i><a href="#">Sign in With Apple</a></div>
                            <p class="text-center mt-5">By Jonining, I agree to the <a href="#">Terms &
                                    Condition</a>and<a href="#">Privancy & Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End hero slider-->
            <!--Products Tabs-->
            <section class="section-padding pb-5">
                <div class="container">
                    <div class="section-title wow animate__animated animate__fadeIn">
                    </div>
                    <div class="row px-5">
                        <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                            <div class="banner-img style-2" style="height: 300px;">
                                <div class="banner-text">
                                    <h2 class="mb-10" style="color: #fff;">Trendings Brands</h2>
                                    <p style="color: #fff; ">People around you are loving these places</p><br>
                                    <a href="shop-grid-right.html" class="btn "
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
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 70px; height: 70px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 80px; height: 80px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                            </div>
                                            <!--End product Wrap-->
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 70px; height: 70px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 80px; height: 80px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                            </div>
                                            <!--End product Wrap-->
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 70px; height: 70px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 80px; height: 80px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                            </div>
                                            <!--End product Wrap-->
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 70px; height: 70px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 80px; height: 80px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                            </div>
                                            <!--End product Wrap-->
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 70px; height: 70px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
                                                </div>
                                                <div class="product-img-action-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html"
                                                            style="border-radius: 300px; width: 80px; height: 80px;">
                                                            <img class="default-img" src="{{ asset('front') }}/imgs/shop/download.png"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap"
                                                    style="justify-content: center; display: flex;">
                                                    <h2><a href="shop-product-right.html">50+ Points</a></h2>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-10-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L
                                                            Bottle</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-15-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Encore Seafoods Stuffed
                                                            Alaskan</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-12-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish </a>
                                                    </h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-13-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice</a>
                                                    </h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-14-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Italian-Style Chicken
                                                            Meatball</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                <div class="tab-pane fade" id="tab-three-1" role="tabpanel"
                                    aria-labelledby="tab-three-1">
                                    <div class="carausel-4-columns-cover arrow-center position-relative">
                                        <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                            id="carausel-4-columns-3-arrows"></div>
                                        <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-7-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Perdue Simply Smart Organics
                                                            Gluten Free</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-8-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Seeds of Change Organic
                                                            Quinoa</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-9-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Signature Wood-Fired Mushroom</a>
                                                    </h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-13-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Simply Lemonade with Raspberry
                                                            Juice</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img"
                                                                src="{{ asset('front') }}/imgs/shop/product-14-1.jpg" alt="" />
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
                                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">Organic Quinoa, Brown, & Red
                                                            Rice</a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 50%" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                <div class="card-footer text-center mt-2"style="border-radius: 10px; color: black;">
                                    Visit Brand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div>
                <H5 class="mtb-30 text-center" style="padding: 20px 20px; color: #F1853E;"><a href="#">See
                        More</a></H5>
            </div>
    </main>
@endsection
