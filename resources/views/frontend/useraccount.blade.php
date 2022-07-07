@extends('frontend.layouts')
@section('title')
    User Account - Smart Card
@endsection
@section('content')
    <!--End header-->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    > My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3 col-sm-10">
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
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                href="#payment-method" role="tab" aria-controls="orders"
                                                aria-selected="false">Payments</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#packages" role="tab" aria-controls="track-orders"
                                                aria-selected="false">Packages</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#points"
                                                role="tab" aria-controls="address" aria-selected="true">Points</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="messages-tab" data-bs-toggle="tab" href="#messages"
                                                role="tab" aria-controls="messages" aria-selected="true">Messages</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="history-tab" data-bs-toggle="tab" href="#history"
                                                role="tab" aria-controls="history" aria-selected="true">History</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50 pr-50"
                                    style=" border: 1px solid #b7b7b78f; border-radius: 23px;">
                                    <!---Profile --->
                                    <div class="tab-pane fade  active show" id="dashboard-payment" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">My Profile</h3>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-wishlist">
                                                    <tbody>
                                                        <tr class="pt-30" style="  border: 1px solid #ffffff; ">
                                                            <td class="image product-thumbnail  " style=" width: 10%;">
                                                                <img src="{{ asset('front') }}/imgs/theme/google-play.jpg"
                                                                    style=" border-radius: 47px;  height: 70px;  width: 66px; "
                                                                    alt="#">
                                                            </td>
                                                            <td class="product-des product-name">
                                                                <h6 class=""><a
                                                                        class="product-name mb-10 text-heading"
                                                                        href="shop-product-right.html">Umer Khan</a></h6>
                                                                <div class="product-rate-cover">
                                                                    <span
                                                                        class="font-small  text-muted">umerkhan71@gmail.com</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-center" data-title="Remove">
                                                                <img src="../../www.qr-code-generator.com/wp-content/themes/qr/new_structure/markets/core_market_full/generator/dist/generator/assets/images/websiteQRCode_noFrame.png"
                                                                    style="border-radius: 47px;height: 41px;width: 41px;box-shadow: 0px 0px 9px 3px #0000004a;"
                                                                    alt="#">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row mtb-30">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('front') }}/imgs/atm.png"
                                                            style="border-radius: 10px;box-shadow: 0px 0px 9px 3px #00000017;"
                                                            alt="#">
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                <div class="row  py-3" style=" border-top: 1px solid #b7b7b78f; ">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">
                                                        <div class="progress mtb-20">
                                                            <div class="progress-bar progress-bar-striped"
                                                                role="progressbar"
                                                                style="width: 70%; background-color: #007bff;"
                                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="points">
                                                                    <img src="{{ asset('front') }}/imgs/points/points40.png"
                                                                        style="height: 100%;width: 75%; margin-left:20px;"
                                                                        alt="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="points">
                                                                    <img src="{{ asset('front') }}/imgs/points/points80.png"
                                                                        style="height: 105%;width: 80%; margin-top:-50px; margin-left:40px;"
                                                                        alt="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="points">
                                                                    <img src="{{ asset('front') }}/imgs/points/points100.png"
                                                                        style="height: 105%;width: 80%;margin-top:-50px; margin-left:50px;"
                                                                        alt="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="points">
                                                                    <img src="{{ asset('front') }}/imgs/points/points300.png"
                                                                        style="height: 100%;width: 73%;margin-top:-50px; margin-left:90px;"
                                                                        alt="#">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                                <div class="row py-2" style=" border-top: 1px solid #b7b7b78f;">
                                                    <h4 class="text-center"> Our Suggestions </h4>
                                                </div>
                                                <div class="row py-5" style=" border-top: 1px solid #b7b7b78f;">
                                                    <div class="col-md-2 mtb-10">
                                                        <div
                                                            style="height: 88px; width: 93px; border-radius: 51px; border: 2px solid #144cbba3; display: block; margin-left: auto; margin-right: auto;">
                                                            <img src="{{ asset('front') }}/imgs/shop/product-1-1.jpg"
                                                                style="border-radius: 41px;height: 100%;width: 99%;"
                                                                alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mtb-10">
                                                        <div
                                                            style="height: 88px; width: 93px; border-radius: 51px; border: 2px solid #144cbba3; display: block; margin-left: auto; margin-right: auto;">
                                                            <img src="{{ asset('front') }}/imgs/shop/product-1-1.jpg"
                                                                style="border-radius: 41px;height: 100%;width: 99%;"
                                                                alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mtb-10">
                                                        <div
                                                            style="height: 88px; width: 93px; border-radius: 51px; border: 2px solid #144cbba3; display: block; margin-left: auto; margin-right: auto;">
                                                            <img src="{{ asset('front') }}/imgs/shop/product-1-1.jpg"
                                                                style="border-radius: 41px;height: 100%;width: 99%;"
                                                                alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mtb-10">
                                                        <div
                                                            style="height: 88px; width: 93px; border-radius: 51px; border: 2px solid #144cbba3; display: block; margin-left: auto; margin-right: auto;">
                                                            <img src="{{ asset('front') }}/imgs/shop/product-1-1.jpg"
                                                                style="border-radius: 41px;height: 100%;width: 99%;"
                                                                alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mtb-10">
                                                        <div
                                                            style="height: 88px; width: 93px; border-radius: 51px; border: 2px solid #144cbba3; display: block; margin-left: auto; margin-right: auto;">
                                                            <img src="{{ asset('front') }}/imgs/shop/product-1-1.jpg"
                                                                style="border-radius: 41px;height: 100%;width: 99%;"
                                                                alt="#">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row py-5" style=" border-top: 1px solid #b7b7b78f;">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8"></div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Payment --->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Payment</h3>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <img src="{{ asset('front') }}/imgs/atm.png"
                                                        style="border-radius: 10px;box-shadow: 0px 0px 9px 3px #00000017;"
                                                        alt="#">
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" name="enq">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Card Holder Name <span class="required">*</span></label>
                                                            <input required="" class="form-control"
                                                                placeholder="Ex: Al-Jabbar ibn Dawood" name="name"
                                                                type="text" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Card Number <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="dname"
                                                                placeholder="12345 5463 5655 " type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Month <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="text"
                                                                placeholder="Month " type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>CVC <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="password"
                                                                placeholder="CVC" type="text" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                style="background: #f1853e;border-color: #f1853e;"
                                                                class="btn btn-fill-out submit font-weight-bold"
                                                                name="submit" value="Submit">Confirm Payment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Packages --->
                                    <div class="tab-pane fade " id="packages" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Packages</h3>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-5" style="margin-left: 16px;"></div>
                                                <div class="col-lg-3">
                                                    <img src="{{ asset('front') }}/imgs/theme/google-play.jpg"
                                                        style=" border-radius: 47px;  height: 70px;  width: 66px; "
                                                        alt="#">
                                                    <p style="color: #253D4E; font-weight: 700;">Umer Khan</p>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                            <div class="row text-center">
                                                <p>umerkhan71@gmail.com</p>
                                            </div>
                                            <div class="row mt-30 text-center">
                                                <p style="color: #253D4E; font-weight: 700;">Choose Your Package</p>
                                            </div>
                                            <div class="row mtb-10 text-center">
                                                <p class="text-center">To track your order please enter your OrderID in the
                                                    box below and press "Track" button. This was given to you on your
                                                    receipt and in the confirmation email you should have received.</p>
                                            </div>
                                            <div class="row mtb-20">
                                                <div class="col-6">
                                                    <img src="{{ asset('front') }}/imgs/pkg1.png" alt="#"
                                                        style="border-radius: 11px;">
                                                </div>
                                                <div class="col-4">
                                                    <h6><a class="product-name text-heading" href="#">Plan 1:
                                                            $20/Weekly </a></h6>
                                                    <p>Get Unlimited Discount Over 20,000 Merchant</p>

                                                </div>
                                                <div class="col-2">
                                                    <button class="btn font-weight-bold">Select</button>
                                                </div>
                                            </div>
                                            <div class="row mtb-20">
                                                <div class="col-6">
                                                    <img src="{{ asset('front') }}/imgs/pkg2.png" alt="#"
                                                        style="border-radius: 11px;">
                                                </div>
                                                <div class="col-4">
                                                    <h6><a class="product-name text-heading" href="#">Plan 2:
                                                            $60/Monthy </a></h6>
                                                    <p>Get Unlimited Discount Over 20,000 Merchant</p>

                                                </div>
                                                <div class="col-2">
                                                    <button class="btn font-weight-bold">Select</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Points --->
                                    <div class="tab-pane fade " id="points" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Points</h3>
                                            </div>

                                            <section class="featured section-padding">

                                                <div class="container">


                                                    <div class="row py-5" style="width: 111%;margin-left: -66px;">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-8">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar"
                                                                    style="width: 70%; background-color: #007bff;"
                                                                    aria-valuenow="10" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2 ml-30 mr-30">
                                                                    <div
                                                                        style="  margin-top: -56px;  height: 88px; width: 93px;">
                                                                        <img src="{{ asset('front') }}/imgs/points/points40.png"
                                                                            style="height: 100%;width: 75%;"
                                                                            alt="#">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mr-30">
                                                                    <div
                                                                        style="  margin-top: -56px;  height: 88px; width: 93px;">
                                                                        <img src="{{ asset('front') }}/imgs/points/points80.png"
                                                                            style="height: 105%;width: 80%;"
                                                                            alt="#">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mr-30">
                                                                    <div
                                                                        style="  margin-top: -56px;  height: 88px; width: 93px;">
                                                                        <img src="{{ asset('front') }}/imgs/points/points100.png"
                                                                            style="height: 105%;width: 80%;"
                                                                            alt="#">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 mr-30">
                                                                    <div
                                                                        style="  margin-top: -56px;  height: 88px; width: 93px;">
                                                                        <img src="{{ asset('front') }}/imgs/points/points300.png"
                                                                            style="height: 100%;width: 73%;"
                                                                            alt="#">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-6">


                                                            <div id="mainbox" class="mainbox">
                                                                <div id="box" class="box">
                                                                    <div class="box1">
                                                                        <span class="span1"><b>10 $</b></span>
                                                                        <span class="span2"><b>20 $</b></span>
                                                                        <span class="span3"><b>50 $</b></span>
                                                                        <span class="span4"><b>100 $</b></span>
                                                                    </div>
                                                                    <div class="box2">
                                                                        <span class="span1"><b>150 $</b></span>
                                                                        <span class="span2"><b>200 $</b></span>
                                                                        <span class="span3"><b>400 $</b></span>
                                                                        <span class="span4"><b>500 $</b></span>
                                                                    </div>
                                                                </div>
                                                                <button class="spin"
                                                                    onclick="myfunctionSpinner()">SPIN</button>
                                                            </div>


                                                            <div class="button mt-20"
                                                                style="margin-left:94px; background: #f1853e; ">
                                                                <button class="btn"
                                                                    style="display: block;
                                                            cursor: pointer;
                                                            margin-left:22px;
                                                            font-size: 16px;
                                                            border: none;
                                                            border-radius: 5px;
                                                            margin: 0px auto;
                                                            width: 250px;
                                                            height: 60px;
                                                            color: #ffffff;
                                                             background: #f1853e; "
                                                                    onclick="myfunctionSpinner()"> Start Spin</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!---Message --->
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
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;float:right;">Dec
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
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;float:right;">Dec
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
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static; float:right;">Dec
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
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">Dec 25</span>
                                                                            </h5>
                                                                            <p>Test, which is a new approach to have all
                                                                                solutions
                                                                                astrology under one roof.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat_list ">
                                                                    <div class="chat_people">
                                                                        <div class="chat_img"> <img
                                                                                src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                                alt="sunil"> </div>
                                                                        <div class="chat_ib">
                                                                            <h5>Ameer Hamza <span class="chat_date"
                                                                                    style="position: static;">>Dec
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
                                                                            src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                                            alt="sunil"> </div>
                                                                    <div class="received_msg">
                                                                        <div class="received_withd_msg">
                                                                            <p>Test which is a new approach to have all
                                                                                solutions</p>
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
                                    <!---History --->
                                    <div class="tab-pane fade " id="history" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">History</h3>
                                            </div>
                                            <section class="featured section-padding">
                                                <div class="container">
                                                    <div class="search-style-2" align="center">
                                                        <input type="text" placeholder="Search"
                                                            style="border-radius: 90px;height: 42px;width: 66%; background: #E5E5E5; box-shadow: 0px 3px 7px 0px #0000004a;" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-10 mt-15">
                                                            <div style=" box-shadow: 0px 8px 7px 0px #0000004a; background: #fff;"
                                                                class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="icon-box-title mtb-10"
                                                                        style="color: #000000 !important;">Kfc Gulshan
                                                                        Branch
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-right:auto; color: red;">3
                                                                            days</span>
                                                                    </h6>
                                                                    <p style="font-size: 14px; color: #00000">Lorem Lisump
                                                                        Descripation
                                                                        &nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-left:auto;color: #126eb3;">Reviews</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt-15">
                                                            <div style=" box-shadow: 0px 8px 7px 0px #0000004a; background: #fff;"
                                                                class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="icon-box-title mtb-10"
                                                                        style="color: #000000 !important;">Kfc Gulshan
                                                                        Branch
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-right:auto; color: red;">3
                                                                            days</span>
                                                                    </h6>
                                                                    <p style="font-size: 14px; color: #00000">Lorem Lisump
                                                                        Descripation
                                                                        &nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-left:auto;color: #126eb3;">Reviews</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt-15">
                                                            <div style=" box-shadow: 0px 8px 7px 0px #0000004a; background: #fff;"
                                                                class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="icon-box-title mtb-10"
                                                                        style="color: #000000 !important;">Kfc Gulshan
                                                                        Branch
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-right:auto; color: red;">3
                                                                            days</span>
                                                                    </h6>
                                                                    <p style="font-size: 14px; color: #00000">Lorem Lisump
                                                                        Descripation
                                                                        &nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-left:auto;color: #126eb3;">Reviews</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt-15">
                                                            <div style=" box-shadow: 0px 8px 7px 0px #0000004a; background: #fff;"
                                                                class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="icon-box-title mtb-10"
                                                                        style="color: #000000 !important;">Kfc Gulshan
                                                                        Branch
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-right:auto; color: red;">3
                                                                            days</span>
                                                                    </h6>
                                                                    <p style="font-size: 14px; color: #00000">Lorem Lisump
                                                                        Descripation
                                                                        &nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-left:auto;color: #126eb3;">Reviews</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mt-15">
                                                            <div style=" box-shadow: 0px 8px 7px 0px #0000004a; background: #fff;"
                                                                class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                                                                data-wow-delay="0">
                                                                <div class="banner-icon">
                                                                    <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg"
                                                                        alt="" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="icon-box-title mtb-10"
                                                                        style="color: #000000 !important;">Kfc Gulshan
                                                                        Branch
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-right:auto; color: red;">3
                                                                            days</span>
                                                                    </h6>
                                                                    <p style="font-size: 14px; color: #00000">Lorem Lisump
                                                                        Descripation
                                                                        &nbsp;&nbsp;<span
                                                                            style="font-size: 12px; margin-left:auto;color: #126eb3;">Reviews</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
@endsection
