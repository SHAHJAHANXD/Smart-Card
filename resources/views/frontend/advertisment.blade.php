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
                                        <li class="nav-item " style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="orders-tab"  href="{{ route('merchant.profile') }}"
                                                role="tab" aria-controls="orders" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="orders-tab"  href="{{ route('merchant.payments') }}"
                                                role="tab" aria-controls="orders" aria-selected="false">Payments</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="track-orders-tab"  href="{{ route('merchant.statistics') }}"
                                                role="tab" aria-controls="track-orders"
                                                aria-selected="false">Statistics</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="buypoints-tab"  href="{{ route('merchant.points') }}"
                                                role="tab" aria-controls="buypoints" aria-selected="false">Buy Points</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="messages-tab"  href="{{ route('merchant.messages') }}"
                                                role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="addoffer-tab"  href="{{ route('merchant.offer') }}"
                                                role="tab" aria-controls="addoffer" aria-selected="false">Add Offer</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link active" id="advertisment-tab"
                                                href="{{ route('merchant.advertisment') }}" role="tab" aria-controls="advertisment"
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
                                    <!-- Advertisment-->
                                    <div class="" id="advertisment" role="tabpanel"
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
