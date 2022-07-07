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
                                        <a class="nav-link" id="account-detail-tab" 
                                            href="{{ route('merchant.profile') }}" role="tab" aria-controls="account-detail"
                                            aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item " style="border: 0px solid #ececec; ">
                                        <a class="nav-link active" id="orders-tab"  href="{{ route('merchant.payments') }}"
                                            role="tab" aria-controls="orders" aria-selected="true">Payments</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="track-orders-tab"  href="{{ route('merchant.statistics') }}"
                                            role="tab" aria-controls="track-orders"
                                            aria-selected="false">Statistics</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="buypoints-tab"  href="{{ route('merchant.points') }}"
                                            role="tab" aria-controls="buypoints" aria-selected="false">Buy Points</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="messages-tab"  href="{{ route('merchant.messages') }}"
                                            role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="addoffer-tab"  href="{{ route('merchant.offer') }}"
                                            role="tab" aria-controls="addoffer" aria-selected="false">Add Offer</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="advertisment-tab"
                                            href="{{ route('merchant.advertisment') }}" role="tab" aria-controls="advertisment"
                                            aria-selected="false">Advertisment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-50 pr-50 mtb-15" style=" border: 1px solid #b7b7b78f; border-radius: 23px;">
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
                                                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                                            <div class="banner-icon">
                                                                <img src="{{ asset('front') }}/imgs/theme/icons/icon-1.svg" alt="" />
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
                                <!-- payment-method-->
                                <div class="" id="" role="tabpanel" aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Payment</h3>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('front') }}/imgs/blog/card.png" style="border-radius: 23px;box-shadow: 0px 0px 9px 3px #00000017;" alt="#">
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
