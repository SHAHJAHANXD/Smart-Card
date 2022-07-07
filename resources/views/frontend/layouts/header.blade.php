<header class="header-area header-style-1 header-height-2">
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="{{ asset('front') }}/imgs/logo.png" alt="logo" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <input type="text" placeholder="Search for items..." />
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                            </div>
                            <div class="header-action-icon-2" style="margin-top: -29px;">
                                <a href="page-account.html"><span class="lable ml-1">Location</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li><a href="page-account.html">Karachi</a></li>
                                        <li><a href="page-account.html">Lahore</a></li>
                                        <li><a href="page-account.html">Islamabad</a></li>
                                        <li><a href="page-account.html">Sangar</a></li>
                                        <li><a href="page-account.html">Multan</a></li>
                                        <li><a href="page-account.html">kashmir</a></li>
                                    </ul>
                                </div>
                            </div>
                            @if (Auth::guard('merchant')->check() === true)
                                <div class="header-action-icon-2" style="margin-top: -29px;">
                                    <a href="#"><span class="lable ml-1">Points</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <img src="{{ asset('front') }}/imgs/slider/points.png" width="60px"
                                        height="60px" style=" border-radius: 44px;margin-top: -29px;" />
                                </div>
                                <div class="">
                                    <figure class="img-hover-scale ">
                                        <a href="{{ route('merchant.profile') }}"><img
                                                src="{{ asset('front') }}/imgs/theme/google-play.jpg" width="50px"
                                                height="50px" style=" border-radius: 44px;" /></a>
                                    </figure>
                                    <h6><a href="{{ route('merchant.profile') }}"
                                            style="color: #7E7E7E;">{{ Auth::guard('merchant')->user()->first_name }}
                                            {{ Auth::guard('merchant')->user()->last_name }}</a></h6>
                                </div>
                            @else
                                <div class="header-action-icon-2" style="margin-top: -29px;">
                                    <a href="{{ route('merchant.page.login') }}"><span
                                            class="lable ml-1">Login</span></a>
                                </div>
                                <div class="header-action-icon-2" style="margin-top: -29px;">
                                    <a href="{{ route('merchant.page.register') }}"><span
                                            class="lable ml-1">Register</span></a>
                                </div>
                            @endif
                            <div class="header-action-icon-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="/"><img src="{{ asset('front') }}/imgs/logo.png" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">

                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li class="hot-deals"></li>
                                <li>
                                    <a class="active" href="/">Category <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('merchantfeatures') }}">Merchant Features</a></li>
                                        <li><a href="{{ route('merchantaccount') }}">Merchant Page Account</a></li>
                                        <li><a href="{{ route('merchant.brand') }}">Trending Brands</a></li>
                                        <li><a href="{{ route('merchant.shopdetails') }}">Shop Details</a></li>
                                        <li><a href="{{ route('merchant.useraccount') }}">User Account</a></li>
                                        <li><a href="{{ route('merchant.page.register') }}">Register</a></li>
                                        <li><a href="{{ route('merchant.page.login') }}">Login</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="active" href="/">Help <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/">Help 1</a></li>
                                        <li><a href="index-2.html">Help 2</a></li>
                                        <li><a href="index-3.html">Help 3</a></li>
                                        <li><a href="index-4.html">Help 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-flex">
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">

                        <div class="header-action-icon-2" style="margin-top: -29px;">
                            <a href="page-account.html"><span class="lable ml-1">Location</span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                <ul>
                                    <li><a href="page-account.html">Karachi</a></li>
                                    <li><a href="page-account.html">Lahore</a></li>
                                    <li><a href="page-account.html">Islamabad</a></li>
                                    <li><a href="page-account.html">Sangar</a></li>
                                    <li><a href="page-account.html">Multan</a></li>
                                    <li><a href="page-account.html">kashmir</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-action-icon-2" style="margin-top: -29px;">
                            <a href="#"><span class="lable ml-1">Points</span></a>
                        </div>
                        <div class="header-action-icon-2">
                            <img src="{{ asset('front') }}/imgs/slider/points.png" width="60px" height="60px"
                                style=" border-radius: 44px;margin-top: -29px;" />
                        </div>
                        <div class="">
                            <figure class="img-hover-scale ">
                                <a href="#"><img src="{{ asset('front') }}/imgs/theme/google-play.jpg"
                                        width="50px" height="50px" style=" border-radius: 44px;" /></a>
                            </figure>
                            <h6><a href="#" style="color: #7E7E7E;">Name</a></h6>
                        </div>
                        <div class="header-action-icon-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</header>
