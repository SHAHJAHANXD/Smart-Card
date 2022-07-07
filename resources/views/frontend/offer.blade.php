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
                                <ul class="nav flex-column" role="tablist" style=" border: 1px solid #b7b7b78f; border-radius: 10px; ">
                                    <li class="nav-item " style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="orders-tab" href="{{ route('merchant.profile') }}" role="tab" aria-controls="orders" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link " id="orders-tab" href="{{ route('merchant.payments') }}" role="tab" aria-controls="orders" aria-selected="false">Payments</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link " id="track-orders-tab" href="{{ route('merchant.statistics') }}" role="tab" aria-controls="track-orders" aria-selected="false">Statistics</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link " id="buypoints-tab" href="{{ route('merchant.points') }}" role="tab" aria-controls="buypoints" aria-selected="false">Buy
                                            Points</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link " id="messages-tab" href="{{ route('merchant.messages') }}" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link active" id="addoffer-tab" href="{{ route('merchant.offer') }}" role="tab" aria-controls="addoffer" aria-selected="true">Add Offer</a>
                                    </li>
                                    <li class="nav-item" style="border: 0px solid #ececec; ">
                                        <a class="nav-link" id="advertisment-tab" href="{{ route('merchant.advertisment') }}" role="tab" aria-controls="advertisment" aria-selected="false">Advertisment</a>
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

                                <!-- Add Offer-->
                                <div class="" id="addoffer" role="tabpanel" aria-labelledby="addoffer-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Add Offer</h3>
                                        </div>
                                        <div class="archive-header" style="background: url('{{ asset('front') }}/imgs/slider/offerslider.png') no-repeat center center; border-radius: 10px; padding: 150px 80px;">
                                        </div>
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-8 primary-sidebar sticky-sidebar px-3">
                                                <div class="sidebar-widget widget-store-info mb-30  border-0 px-5" align="center" style=" margin-top: -90px;  background-color: #fff !important;">
                                                    <div class="vendor-logo mb-20" align="center">
                                                        <img src="{{ asset('front') }}/imgs/slider/greno.png" alt="" />
                                                    </div>
                                                    <div class="vendor-info">
                                                        <h4 class="mb-20" align="center"><a href="vendor-details-1.html" class="text-heading">Greeno Juices</a></h4>
                                                        <div class="row mb-20" align="center">
                                                            <div class=" col-4" style="font-size: 18px; color: black;">Reviews:</div>
                                                            <div class=" col-4" style="font-size: 18px; color: black;">Rating: </div>
                                                            <div class=" col-4" style="font-size: 18px; color: black;">Points: </div>
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
                                                <a class="nav-link active" id="add-offer-pkg-tab" data-bs-toggle="tab" href="#add-offer-pkg" role="tab" aria-controls="add-pkg-reviews" aria-selected="true" style="color:#ffffff; font-weight: 900;">
                                                    Packages</a>
                                            </div>
                                            <div class="col-6" style="background-color: #d8d0d0;"><a class="nav-link" id="add-offer-reviews-tab" data-bs-toggle="tab" href="#add-offer-reviews" role="tab" aria-controls="add-offer-reviews" aria-selected="true" style="color:#000000; font-weight: 900;">
                                                    Reviews</a>
                                            </div>
                                        </div>

                                        <!-- packages -->

                                        <div class="tab-content account dashboard-content ">
                                            <div class="tab-pane fade active show" id="add-offer-pkg" role="tabpanel" aria-labelledby="add-offer-pkg-tab">
                                                <div class="row mb-30">
                                                    @forelse ($offer as $offer)
                                                    <div class="col-lg-12 col-md-12 mtb-20" style=" background-color: #126eb3; color: white;">
                                                        <div class="single-comment justify-content-between d-flex mtb-20">
                                                            <div class="user  d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('/images/' . $offer->image) }}" alt="" style="width: 150px; height: 150px;" />
                                                                </div>
                                                                <div class="desc" style="color: white !important; margin-left: 10px;">
                                                                    <h2 style="color:white;"><b>{{ $offer->discount }}</b></h2>
                                                                    <p class="mtb-5" style="color:white;">{{ $offer->description }} </p>
                                                                    <button type="button" class="btn btn-outline-danger" style="background-color:white">
                                                                        <bold style="color:red">Add an Offer</bold>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            @if($offer->status == 1)
                                                            <span class="badge badge-success" style="height: 20px; background: #28a745">Approved</span>
                                                            @endif
                                                            @if($offer->status == 0)
                                                            <span class="badge badge-danger" style="height: 20px; background: red">Rejected</span>
                                                            @endif
                                                            @if($offer->status == 2)
                                                            <span class="badge badge-primary" style="height: 20px; background: #6C757D">Pending</span>
                                                            @endif

                                                        </div>

                                                    </div>
                                                    @empty

                                                    @endforelse


                                                </div>

                                                <form action="{{ route('merchant.post.offer') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="row py-3" style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5">
                                                                <a class="product-name text-heading" href="#">Upload Image</a>
                                                            </h6>
                                                            <input type="file" name="image" multiple>

                                                            <div class="product-rate-cover">

                                                            </div>
                                                        </div>
                                                        <div class="row py-3" style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading" href="#">Descripation </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted "><input type="text" name="description" placeholder="Enter description for your offer."></p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-3" style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading" href="#">Add Discount </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted "><select class="form-select" name="discount" aria-label="Default select example">
                                                                    <option selected>Select Discount offers</option>
                                                                    <option value="5% Off">5% Off</option>
                                                                    <option value="10% Off">10% Off</option>
                                                                    <option value="15% Off">15% Off</option>
                                                                    <option value="20% Off">20% Off</option>
                                                                    <option value="25% Off">25% Off</option>
                                                                    <option value="30% Off">30% Off</option>
                                                                    <option value="35% Off">35% Off</option>
                                                                    <option value="40% Off">40% Off</option>
                                                                    <option value="45% Off">45% Off</option>
                                                                    <option value="50% Off">50% Off</option>
                                                                    <option value="55% Off">55% Off</option>
                                                                    <option value="60% Off">60% Off</option>
                                                                    <option value="65% Off">65% Off</option>
                                                                    <option value="70% Off">70% Off</option>
                                                                    <option value="75% Off">75% Off</option>
                                                                    <option value="80% Off">80% Off</option>
                                                                    <option value="85% Off">85% Off</option>
                                                                    <option value="90% Off">90% Off</option>
                                                                    <option value="95% Off">95% Off</option>
                                                                    <option value="100% Off">100% Off</option>
                                                                  </select></p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-3" style=" border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <h6 class="mb-5"><a class="product-name text-heading" href="">Points </a></h6>
                                                            <div class="product-rate-cover">
                                                                <p class="text-muted "><input type="text" name="points" value="200" hidden>+200 Points</p>
                                                            </div>
                                                        </div>
                                                        <div class="row py-5" style="border-top: 1px solid #b7b7b78f;width:100%;">
                                                            <form style="justify-content: center; display: flex;">
                                                                <button type="submit" class="btn btn-primary btn-lg" style=" padding: 25px 50px; background-color:
          #34c47e; border-radius: 76px; font-size: 30px;">Add
                                                                    Offer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Reviews -->
                                            <div class="tab-pane fade " id="add-offer-reviews" role="tabpanel" aria-labelledby="add-offer-reviews-tab">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="comments-area">
                                                            <h3 class="mb-30">Reviews</h3>
                                                            <div class="comment-list">
                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('front') }}/imgs/blog/author-2.png" alt="" style="border-radius: 13%;min-width: 114px;;height: 116px;" />
                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#" class="font-heading text-brand">Sienna
                                                                                    </a>
                                                                                    <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->
                                                                                </div>
                                                                            </div>
                                                                            Ratings: <div class="product-rate d-inline-block">
                                                                                <div class="product-rating" style="width: 80%"></div>
                                                                            </div>
                                                                            <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                amet, consectetur adipisicing elit.
                                                                                Delectus, suscipit exercitationem
                                                                                accusantium obcaecati quos voluptate
                                                                                nesciunt facilis itaque modi commodi
                                                                                dignissimos sequi repudiandae minus ab
                                                                                deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('front') }}/imgs/blog/author-2.png" alt="" style="border-radius: 13%;min-width: 114px;;height: 116px;" />

                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#" class="font-heading text-brand">Sienna
                                                                                    </a>
                                                                                    <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->

                                                                                </div>


                                                                            </div>
                                                                            Ratings: <div class="product-rate d-inline-block">
                                                                                <div class="product-rating" style="width: 80%"></div>
                                                                            </div>
                                                                            <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                amet, consectetur adipisicing elit.
                                                                                Delectus, suscipit exercitationem
                                                                                accusantium obcaecati quos voluptate
                                                                                nesciunt facilis itaque modi commodi
                                                                                dignissimos sequi repudiandae minus ab
                                                                                deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('front') }}/imgs/blog/author-2.png" alt="" style="border-radius: 13%;min-width: 114px;;height: 116px;" />

                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#" class="font-heading text-brand">Sienna
                                                                                    </a>
                                                                                    <!---<span class="font-xs text-muted"> December 4, 2021 at 3:12 pm </span> -->

                                                                                </div>


                                                                            </div>
                                                                            Ratings: <div class="product-rate d-inline-block">
                                                                                <div class="product-rating" style="width: 80%"></div>
                                                                            </div>
                                                                            <p class="mb-10 mt-5">Lorem ipsum dolor sit
                                                                                amet, consectetur adipisicing elit.
                                                                                Delectus, suscipit exercitationem
                                                                                accusantium obcaecati quos voluptate
                                                                                nesciunt facilis itaque modi commodi
                                                                                dignissimos sequi repudiandae minus ab
                                                                                deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="  mb-15" style="border-top: solid 1px #0000001c;border-bottom: solid 1px #0000001c;padding: 10px 0px 12px 369px;margin-top: -55px;">
                                                            See More</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Advertisment-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
