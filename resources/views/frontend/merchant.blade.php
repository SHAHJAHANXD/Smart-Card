@extends('frontend.layouts')
@section('title')
    Merchant - Smart Card
@endsection
@section('content')
    <!--End header-->
    <main class="main pages">
        <div class="page-content">
            <div class="archive-header"
                style="background: url({{ asset('front') }}/imgs/featuressliderfig.jpg) no-repeat center center; width:100%; border-radius: 0px; padding: 70px 80px; background-size: cover;">
                <div class="slider-content">
                    <h1 class="display-2 mb-40" style="color: #fff; font-family: initial;" align="center">
                        Amazing Platform Best<br /> For you Ecommerce <br />*/ Business
                    </h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-lg-6 col-md-8 primary-sidebar sticky-sidebar px-3">
                        <div class="sidebar-widget widget-store-info mb-30  border-0 px-5" align="center"
                            style="padding: 125px; margin-top: -90px;  background-color: #fff !important;">
                            <div class="vendor-logo mb-20" align="center">
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="text-center mb-50">
                            <h2 class="title style-3 mb-10 mt-50">Our Super <span style="color: red">Features</span><br>
                                That You Will get</h2>
                            <p class="mb-50 des">Lorem Ipsum refers to a dummy block of text that is often used in
                                publishing and graphic design to fill gaps in the page before the actual words are put into
                                the finished product</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-80">
                                    <a href="{{ route('merchant.payments') }}">
                                        <div class="featured-card" style="background: #FA7D6E;border: 1px solid #FA7D6E;">
                                            <img src="{{ asset('front') }}/imgs/theme/icons/features-payment.png" alt="" />
                                            <h4 style="color:#fff;">Payments</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-80">
                                    <a href="{{ route('merchant.points') }}">
                                        <div class="featured-card">
                                            <img src="{{ asset('front') }}/imgs/theme/icons/features-buypoints.png" alt="" />
                                            <h4 style="color:#126EB3;">Buy Points</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-80">
                                    <a href="{{ route('merchant.statistics') }}">
                                        <div class="featured-card" style="background: #34C47E;border: 1px solid #34C47E;">
                                            <img src="{{ asset('front') }}/imgs/theme/icons/ss.png" alt="" />
                                            <h4 style="color:#fff;">Satisfaction</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                  <a href="{{ route('merchant.offer') }}">
                                    <div class="featured-card" style="background: #FBBC05;border: 1px solid #FBBC05;">
                                        <img src="{{ asset('front') }}/imgs/theme/icons/addoy.png" alt="" />
                                        <h4 style="color:#fff;">Add offer</h4>
                                    </div>
                                  </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                   <a href="{{ route('merchant.advertisment') }}">
                                    <div class="featured-card" style="background: #407BFF;border: 1px solid #407BFF;">
                                        <img src="{{ asset('front') }}/imgs/theme/icons/addob.png" alt="" />
                                        <h4 style="color:#fff;">Advertisement </h4>
                                    </div>
                                   </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                   <a href="">
                                    <div class="featured-card" style="background: #FF9633;border: 1px solid #FF9633;">
                                        <img src="{{ asset('front') }}/imgs/theme/icons/cl.png" alt="" />
                                        <h4 style="color:#fff;">Close Account</h4>
                                    </div>
                                   </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
