@extends('frontend.layouts')
@section('title')
    Merchant Account - Smart Card
@endsection
@section('content')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a> > My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist"
                                        style=" border: 1px solid #b7b7b78f; border-radius: 10px; ">
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#dashboard-payment" role="tab" aria-controls="dashboard"
                                                aria-selected="false"></i>Home</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#dashboard-payment" role="tab" aria-controls="account-detail"
                                                aria-selected="true">Profile</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#payment-method"
                                                role="tab" aria-controls="orders" aria-selected="false">Payments</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#packages"
                                                role="tab" aria-controls="track-orders"
                                                aria-selected="false">Statistics</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="buypoints-tab" data-bs-toggle="tab" href="#buypoints"
                                                role="tab" aria-controls="buypoints" aria-selected="true">Buy Points</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="messages-tab" data-bs-toggle="tab" href="#messages"
                                                role="tab" aria-controls="messages" aria-selected="true">Messages</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="addoffer-tab" data-bs-toggle="tab" href="#addoffer"
                                                role="tab" aria-controls="addoffer" aria-selected="true">Add Offer</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="advertisment-tab" data-bs-toggle="tab"
                                                href="#advertisment" role="tab" aria-controls="advertisment"
                                                aria-selected="true">Advertisment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50 pr-50 mtb-15"
                                    style=" border: 1px solid #b7b7b78f; border-radius: 23px;">
                                    <!-- Your Orders-->
                                    <div class="tab-pane fade " id="history" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Your Orders</h3>
                                            </div>
                                            <section class="featured section-padding">
                                                <div class="container">
                                                    <div class="search-style-2">
                                                        <input type="text" placeholder="Search for items..." />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div class="banner-text">
                                                                    <h3 class="icon-box-title">Kfc Gulshan Branch</h3>
                                                                    <p>Lorem Lisump Descripation</p>
                                                                    <p style=" margin-left: 534px;margin-top: -53px;">3
                                                                        days</p>
                                                                    <p style=" margin-left: 532px;margin-top: 19px;">
                                                                        Reviews</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Profile-->
                                    <div class="tab-pane fade active show" id="dashboard-payment" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">My Profile</h3>
                                            </div>
                                            <div class="card-body">
                                                <div style="justify-content: center; display: flex;">
                                                    <img src="{{ asset('front') }}/imgs/theme/google-play.jpg"
                                                        style=" border-radius: 47px;  height: 70px;  width: 66px; "
                                                        alt="#">
                                                </div>
                                                <div style="justify-content: center; display: flex; padding: 7px;">
                                                    <h4>{{ Auth::guard('merchant')->user()->first_name }} {{  Auth::guard('merchant')->user()->last_name }}
                                                         @if( Auth::guard('merchant')->user()->otp_status == 1 )
                                                        <span class="badge badge-success" style="background: #28A745;">Verified</span>
                                                    @endif
                                                    @if( Auth::guard('merchant')->user()->otp_status == 0 )
                                                    <span class="badge badge-danger" style="background: red;">Non Verified</span>
                                                @endif</h4>
                                                </div>
                                                <div style="justify-content: center; display: flex; padding: 7px;">
                                                    <h3 style=" color: #0465ac !important;" class="fontss"> {{ Auth::guard('merchant')->user()->email }}</h3>
                                                </div>
                                                <div class="row mb-30">

                                                    <div class="col-md-3 mb-15"></div>
                                                    <div class="col-md-2 mb-15">
                                                        <div class="featured-card" align="center"
                                                            style="padding: 15px 17px 1px 17px;">
                                                            <h5 style=" color: #0465ac !important;">0</h5>
                                                            <p class="text-muted"
                                                                style="font-size: 10px;margin-bottom: 15px;"><b>QR Scan</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-15">
                                                        <div class="featured-card" align="center"
                                                            style="padding: 15px 17px 1px 17px;">
                                                            <h5 style=" color: #0465ac !important;">0</h5>
                                                            <p class="text-muted"
                                                                style="font-size: 10px;margin-bottom: 15px;"><b>Total
                                                                    Order</b></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-15">
                                                        <div class="featured-card" align="center"
                                                            style="padding: 15px 10px 1px 10px;">
                                                            <h5 style=" color: #0465ac !important;">0</h5>
                                                            <p class="text-muted"
                                                                style="font-size: 10px;margin-bottom: 15px;"><b>Loyalty
                                                                    Points</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-15"></div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Name </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">{{ Auth::guard('merchant')->user()->first_name }} {{  Auth::guard('merchant')->user()->last_name }} </p>
                                                    </div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Email Address </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">{{ Auth::guard('merchant')->user()->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Contact </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">{{ Auth::guard('merchant')->user()->phone }}</p>
                                                    </div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Location </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">BL-14 MAIN STREET</p>
                                                    </div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Close Account Temperorily </a></h6>
                                                    <label class="switch" style="margin-left: auto;">
                                                        <form action=""></form>
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>

                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Duriotion </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">2 Week</p>
                                                    </div>
                                                </div>
                                                <div class="row py-3"
                                                    style=" border-top: 1px solid #b7b7b78f;width: auto;">
                                                    <h6 class="mb-5"><a class="product-name text-heading"
                                                            href="#">Status </a></h6>
                                                    <div class="product-rate-cover">
                                                        <p class="text-muted ">Offline</p>
                                                    </div>
                                                </div>
                                                <div class="row py-5 mgl">
                                                    <form style="justify-content: center; display: flex;">
                                                        <a href="{{ route('merchant.logout') }}" class="btn btn-primary btn-lg"
                                                            style=" padding: 25px 50px; background-color:
                                                        #34c47e; border-radius: 76px; font-size: 30px;">Logout</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment-method-->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Payment</h3>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <img src="{{ asset('front') }}/imgs/blog/card.png"
                                                        style="border-radius: 23px;box-shadow: 0px 0px 9px 3px #00000017;"
                                                        alt="#">
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="row mtb-20">
                                                <div class="col-3 " style="display: contents;">
                                                    <h6 class="fontisd" style="margin-right: 16px;margin-top: 7px;">
                                                        ISDSmart Card</h6>
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="col-5">

                                                </div>
                                                <div class="col-3" style="display: contents;">
                                                    <h6 class="fontisd" style="margin-right: 16px;margin-top: 7px;">Cash
                                                        On Delivery</h6>
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- payment-method End-->
                                    </div>
                                    <!-- Statistics-->
                                    <div class="tab-pane fade " id="packages" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Statistics</h3>
                                                <div class="row mtb-20">
                                                    <div class="col-6">
                                                        <h5 class="mtb-20">Line Chart</h5>
                                                        <div>
                                                            <canvas id="myChart"
                                                                style="width: auto; height: 150px;"></canvas>
                                                        </div>
                                                    </div>

                                                    <div class="col-6"
                                                        style="border-left: 2px solid #b7b7b78f; justify-content: center;">
                                                        <h4 class="mtb-20">Record Table</h4>
                                                        <table>
                                                            <thead
                                                                style="background-color: lightgrey; margin: 15px; border-radius: 150px !important;">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Name</th>
                                                                    <th>offer</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>4/7/2022</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Buy Points -->
                                    <div class="tab-pane fade" id="buypoints" role="tabpanel"
                                        aria-labelledby="account-Buy-Points">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Buy Points</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-15">
                                                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                        data-wow-delay="0"style="background-color: #eaeaea;">
                                                        <div class="banner-icon">
                                                            <img src="{{ asset('front') }}/imgs/slider/Gold-Trophy-PNG.png"
                                                                width="40px" height="50px" alt="" />
                                                        </div>
                                                        <p style="color: black; font-size: 15px;">Purchace Our Hot Deals
                                                            and Spend Your Cash and Earn Points</p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-primary"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px;">+200
                                                            Points</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px; background-color: #f24e1e !important;">Buy</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                        data-wow-delay="0"style="background-color: #eaeaea;">
                                                        <div class="banner-icon">
                                                            <img src="{{ asset('front') }}/imgs/slider/Gold-Trophy-PNG.png"
                                                                width="40px" height="50px" alt="" />
                                                        </div>
                                                        <p style="color: black; font-size: 15px;">Purchace Our Hot Deals
                                                            and Spend Your Cash and Earn Points</p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-primary"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px;">+200
                                                            Points</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px; background-color: #f24e1e !important;">Buy</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                        data-wow-delay="0"style="background-color: #eaeaea;">
                                                        <div class="banner-icon">
                                                            <img src="{{ asset('front') }}/imgs/slider/Gold-Trophy-PNG.png"
                                                                width="40px" height="50px" alt="" />
                                                        </div>
                                                        <p style="color: black; font-size: 15px;">Purchace Our Hot Deals
                                                            and Spend Your Cash and Earn Points</p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-primary"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px;">+200
                                                            Points</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px; background-color: #f24e1e !important;">Buy</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                        data-wow-delay="0"style="background-color: #eaeaea;">
                                                        <div class="banner-icon">
                                                            <img src="{{ asset('front') }}/imgs/slider/Gold-Trophy-PNG.png"
                                                                width="40px" height="50px" alt="" />
                                                        </div>
                                                        <p style="color: black; font-size: 15px;">Purchace Our Hot Deals
                                                            and Spend Your Cash and Earn Points</p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-primary"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px;">+200
                                                            Points</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger"
                                                            style="font-size: 12px; border-radius: 15px; padding: 10px 20px; background-color: #f24e1e !important;">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- message-->
                                    <div class="tab-pane fade " id="messages" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="row pt-20 pb-20">
                                            <div class="col-lg-6">
                                                <h3>Messages</h3>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('front') }}/imgs/blog/author-22.png" alt=""
                                                        style="width:40px; height:40px;">
                                                </div>
                                                <h6 class="text-center mt-20">KFC Gulshan Branch</h6>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <div class="messaging" style="margin-left: -50px;padding-bottom: 15px;">
                                                    <div class="inbox_msg">
                                                        <div class="inbox_people">
                                                            <div class="headind_srch">
                                                                <div class="recent_heading">

                                                                </div>
                                                                <div class="srch_bar">
                                                                    <div class="stylish-input-group">
                                                                        <input type="text" class="search-bar"
                                                                            placeholder="Search">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="inbox_chat scroll">
                                                                <div class="chat_list ">
                                                                    <!----- active_chat ----->
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="../../cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date">Dec
                                                                                    25</span></h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="mesgs">
                                                            <div class="msg_history">
                                                                <div class="incoming_msg">
                                                                    <div class="incoming_msg_img"> <img
                                                                            src="../../user.ptetutorials.com/images/user-profile.png"
                                                                            alt="sunil"> </div>
                                                                    <div class="received_msg">
                                                                        <div class="received_withd_msg">
                                                                            <p>Test which is a new approach to have
                                                                                allsolutions</p>
                                                                            <span class="time_date"> 11:01 AM | June
                                                                                9</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outgoing_msg">
                                                                    <div class="sent_msg">
                                                                        <p>Test which is a new approach to have all
                                                                            solutions</p>
                                                                        <span class="time_date"> 11:01 AM | June 9</span>
                                                                    </div>
                                                                </div>
                                                                <div class="incoming_msg">
                                                                    <div class="incoming_msg_img"> <img
                                                                            src="../../user.ptetutorials.com/images/user-profile.png"
                                                                            alt="sunil"> </div>
                                                                    <div class="received_msg">
                                                                        <div class="received_withd_msg">
                                                                            <p>Test, which is a new approach to have</p>
                                                                            <span class="time_date"> 11:01 AM |
                                                                                Yesterday</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outgoing_msg">
                                                                    <div class="sent_msg">
                                                                        <p>Apollo University, Delhi, India Test</p>
                                                                        <span class="time_date"> 11:01 AM | Today</span>
                                                                    </div>
                                                                </div>
                                                                <div class="incoming_msg">
                                                                    <div class="incoming_msg_img"> <img
                                                                            src="../../user.ptetutorials.com/images/user-profile.png"
                                                                            alt="sunil"> </div>
                                                                    <div class="received_msg">
                                                                        <div class="received_withd_msg">
                                                                            <p>We work directly with our designers and
                                                                                suppliers,
                                                                                and sell direct to you, which means quality,
                                                                                exclusive
                                                                                products, at a price anyone can afford.</p>
                                                                            <span class="time_date"> 11:01 AM |
                                                                                Today</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="type_msg">
                                                                <div class="input_msg_write">
                                                                    <button class="at_send_btn" type="button"><i
                                                                            class="fa fa-paperclip"
                                                                            aria-hidden="true"></i></button>
                                                                    <input type="text" class="write_msg"
                                                                        placeholder="Type a message"
                                                                        style="padding-left: 53px;" />
                                                                    <button class="msg_send_btn" type="button"><i
                                                                            class="fa fa-paper-plane"
                                                                            aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Offer-->
                                    <div class="tab-pane fade" id="addoffer" role="tabpanel"
                                        aria-labelledby="addoffer-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Add Offer</h3>
                                            </div>
                                            <div class="archive-header"
                                                style="background: url('{{ asset('front') }}/imgs/slider/offerslider.png') no-repeat center center; border-radius: 10px; padding: 150px 80px;">
                                            </div>
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-8 primary-sidebar sticky-sidebar px-3">
                                                    <div class="sidebar-widget widget-store-info mb-30  border-0 px-5"
                                                        align="center"
                                                        style=" margin-top: -90px;  background-color: #fff !important;">
                                                        <div class="vendor-logo mb-20" align="center">
                                                            <img src="{{ asset('front') }}/imgs/slider/greno.png" alt="" />
                                                        </div>
                                                        <div class="vendor-info">
                                                            <h4 class="mb-20" align="center"><a
                                                                    href="vendor-details-1.html"
                                                                    class="text-heading">Greeno Juices</a></h4>
                                                            <div class="row mb-20" align="center">
                                                                <div class=" col-4"
                                                                    style="font-size: 18px; color: black;">Reviews:</div>
                                                                <div class=" col-4"
                                                                    style="font-size: 18px; color: black;">Rating: </div>
                                                                <div class=" col-4"
                                                                    style="font-size: 18px; color: black;">Points: </div>
                                                            </div>
                                                            <div class="mb-20" align="center">
                                                                <p>Lorem Ipsum refers to a dummy block of text that is often
                                                                    used in publishing and graphic design to fill gaps in
                                                                    the page before the actual words are put into the
                                                                    finished product. Lorem ipsum resembles Latin but has no
                                                                    real meaning</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" align="center">
                                                <div class="col-6" style="background-color: #126eb3; color:#ffffff;">
                                                    <a class="nav-link active" id="add-offer-pkg-tab"
                                                        data-bs-toggle="tab" href="#add-offer-pkg" role="tab"
                                                        aria-controls="add-pkg-reviews" aria-selected="true"
                                                        style="color:#ffffff; font-weight: 900;">
                                                        Packages</a>
                                                </div>
                                                <div class="col-6" style="background-color: #d8d0d0;"><a
                                                        class="nav-link" id="add-offer-reviews-tab" data-bs-toggle="tab"
                                                        href="#add-offer-reviews" role="tab"
                                                        aria-controls="add-offer-reviews" aria-selected="true"
                                                        style="color:#000000; font-weight: 900;">
                                                        Reviews</a>
                                                </div>
                                            </div>

                                            <!-- packages -->

                                            <div class="tab-content account dashboard-content ">
                                                <div class="tab-pane fade " id="add-offer-pkg" role="tabpanel"
                                                    aria-labelledby="add-offer-pkg-tab">
                                                    <div class="row mb-30">
                                                        <div class="col-lg-12 col-md-12 mtb-20"
                                                            style=" background-color: #126eb3; color: white;">
                                                            <div
                                                                class="single-comment justify-content-between d-flex mtb-20">
                                                                <div class="user  d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                            alt=""
                                                                            style="min-width: 150px;;height: 150px;" />
                                                                    </div>
                                                                    <div class="desc"
                                                                        style="color: white !important; margin-left: 10px;">
                                                                        <h2 style="color:white;"><b>15 % Off</b></h2>
                                                                        <p class="mtb-5" style="color:white;">Lorem ipsum
                                                                            dolor sit amet, consectetur adipisicing elit.
                                                                            Delectus, </p>
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger"
                                                                            style="background-color:white">
                                                                            <bold style="color:red">Add an Offer</bold>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 mtb-20"
                                                            style=" background-color: #74c389; color: white;">
                                                            <div
                                                                class="single-comment justify-content-between d-flex mtb-20">
                                                                <div class="user  d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                            alt=""
                                                                            style="min-width: 150px;;height: 150px;" />
                                                                    </div>
                                                                    <div class="desc"
                                                                        style="color: white !important; margin-left: 10px;">
                                                                        <h2 style="color:white;"><b>15 % Off</b></h2>
                                                                        <p class="mtb-5" style="color:white;">Lorem ipsum
                                                                            dolor sit amet, consectetur adipisicing elit.
                                                                            Delectus, </p>
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger"
                                                                            style="background-color:white">
                                                                            <bold style="color:red">Add an Offer</bold>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 mtb-20"
                                                            style=" background-color: #fbb605; color: white;">
                                                            <div
                                                                class="single-comment justify-content-between d-flex mtb-20">
                                                                <div class="user  d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                            alt=""
                                                                            style="min-width: 150px;;height: 150px;" />
                                                                    </div>
                                                                    <div class="desc"
                                                                        style="color: white !important; margin-left: 10px;">
                                                                        <h2 style="color:white;"><b>15 % Off</b></h2>
                                                                        <p class="mtb-5" style="color:white;">Lorem ipsum
                                                                            dolor sit amet, consectetur adipisicing elit.
                                                                            Delectus, </p>
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger"
                                                                            style="background-color:white">
                                                                            <bold style="color:red">Add an Offer</bold>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="row py-3"
                                                            style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading"
                                                                    href="#">Upload Image</a></h6>
                                                            <div class="product-rate-cover">

                                                            </div>
                                                        </div>
                                                        <div class="row py-3"
                                                            style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading"
                                                                    href="#">Descripation </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted ">Lorem Ipsum refers to a dummy block
                                                                    of text that is often used in publishing</p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-3"
                                                            style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading"
                                                                    href="#">Add Discount </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted ">45 % Off</p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-3"
                                                            style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading"
                                                                    href="#">Points </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted ">+200 Points</p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-5"
                                                            style="border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <form style="justify-content: center; display: flex;">
                                                                <button type="button" class="btn btn-primary btn-lg"
                                                                    style=" padding: 25px 50px; background-color:
          #34c47e; border-radius: 76px; font-size: 30px;">Add
                                                                    Offer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Reviews -->
                                                <div class="tab-pane fade active show" id="add-offer-reviews"
                                                    role="tabpanel" aria-labelledby="add-offer-reviews-tab">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="comments-area">
                                                                <h3 class="mb-30">Reviews</h3>
                                                                <div class="comment-list">
                                                                    <div
                                                                        class="single-comment justify-content-between d-flex mb-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                                    alt=""
                                                                                    style="border-radius: 13%;min-width: 114px;;height: 116px;" />
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div
                                                                                    class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="font-heading text-brand">Sienna
                                                                                        </a>
                                                                                        <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->
                                                                                    </div>
                                                                                </div>
                                                                                Ratings: <div
                                                                                    class="product-rate d-inline-block">
                                                                                    <div class="product-rating"
                                                                                        style="width: 80%"></div>
                                                                                </div>
                                                                                <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                    amet, consectetur adipisicing elit.
                                                                                    Delectus, suscipit exercitationem
                                                                                    accusantium obcaecati quos voluptate
                                                                                    nesciunt facilis itaque modi commodi
                                                                                    dignissimos sequi repudiandae minus ab
                                                                                    deleniti totam officia id incidunt? <a
                                                                                        href="#"
                                                                                        class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="single-comment justify-content-between d-flex mb-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                                    alt=""
                                                                                    style="border-radius: 13%;min-width: 114px;;height: 116px;" />

                                                                            </div>
                                                                            <div class="desc">
                                                                                <div
                                                                                    class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="font-heading text-brand">Sienna
                                                                                        </a>
                                                                                        <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->

                                                                                    </div>


                                                                                </div>
                                                                                Ratings: <div
                                                                                    class="product-rate d-inline-block">
                                                                                    <div class="product-rating"
                                                                                        style="width: 80%"></div>
                                                                                </div>
                                                                                <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                    amet, consectetur adipisicing elit.
                                                                                    Delectus, suscipit exercitationem
                                                                                    accusantium obcaecati quos voluptate
                                                                                    nesciunt facilis itaque modi commodi
                                                                                    dignissimos sequi repudiandae minus ab
                                                                                    deleniti totam officia id incidunt? <a
                                                                                        href="#"
                                                                                        class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="single-comment justify-content-between d-flex mb-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="{{ asset('front') }}/imgs/blog/author-2.png"
                                                                                    alt=""
                                                                                    style="border-radius: 13%;min-width: 114px;;height: 116px;" />

                                                                            </div>
                                                                            <div class="desc">
                                                                                <div
                                                                                    class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="font-heading text-brand">Sienna
                                                                                        </a>
                                                                                        <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->

                                                                                    </div>


                                                                                </div>
                                                                                Ratings: <div
                                                                                    class="product-rate d-inline-block">
                                                                                    <div class="product-rating"
                                                                                        style="width: 80%"></div>
                                                                                </div>
                                                                                <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                    amet, consectetur adipisicing elit.
                                                                                    Delectus, suscipit exercitationem
                                                                                    accusantium obcaecati quos voluptate
                                                                                    nesciunt facilis itaque modi commodi
                                                                                    dignissimos sequi repudiandae minus ab
                                                                                    deleniti totam officia id incidunt? <a
                                                                                        href="#"
                                                                                        class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h5 class="  mb-15"
                                                                style="border-top: solid 1px #0000001c;border-bottom: solid 1px #0000001c;padding: 10px 0px 12px 369px;margin-top: -55px;">
                                                                See More</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Advertisment-->
                                    <div class="tab-pane fade" id="advertisment" role="tabpanel"
                                        aria-labelledby="advertisment">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Advertisment</h3>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-12">
                                                    <img src="{{ asset('front') }}/imgs/slider/addslider.png"
                                                        style="border-radius: 10px;" alt="#">
                                                </div>
                                                <div>
                                                    <H3>Title</H3>
                                                    <input type="text"
                                                        style="padding: 14px; height:70px; border-radius: 1px;     border: 1px solid #fff;
    border-bottom-color: black;">
                                                </div>
                                                <h3 style="padding: 20px;">Upload Image</h3>
                                                <div class="Neon Neon-theme-dragdropbox">
                                                    <input
                                                        style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;"
                                                        name="files[]" id="filer_input2" multiple="multiple"
                                                        type="file">
                                                    <div class="Neon-input-dragDrop"
                                                        style="border-radius: 15px; width: 460px;height: 200px;padding: 70px 10px 10px 10px;">
                                                        <div class="Neon-input-inner">
                                                            <div class="Neon-input-icon">
                                                                <i class="fa fa-upload" aria-hidden="true"></i>
                                                            </div>
                                                            <a style="color: #858585;">Drop Image to Upload or Gallery
                                                                Image</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3 style="padding: 14px; ">Descripation</h3>
                                                    <textarea placeholder="Type Your Text Here" style="padding: 15px;"></textarea>
                                                </div>
                                                <div class="row py-5">
                                                    <form style="justify-content: center; display: flex;">
                                                        <button type="button" class="btn btn-primary btn-lg"
                                                            style=" padding: 25px 50px; background-color:
                    #34c47e; border-radius: 60px; font-size: 30px;">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="col-md-80"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
@endsection
