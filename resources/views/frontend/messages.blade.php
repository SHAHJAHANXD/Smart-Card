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
                                            <a class="nav-link" id="orders-tab" href="{{ route('merchant.profile') }}"
                                                role="tab" aria-controls="orders" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="orders-tab" href="{{ route('merchant.payments') }}"
                                                role="tab" aria-controls="orders" aria-selected="false">Payments</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="track-orders-tab"
                                                href="{{ route('merchant.statistics') }}" role="tab"
                                                aria-controls="track-orders" aria-selected="false">Statistics</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link " id="buypoints-tab" href="{{ route('merchant.points') }}"
                                                role="tab" aria-controls="buypoints" aria-selected="false">Buy
                                                Points</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link active" id="messages-tab"
                                                href="{{ route('merchant.messages') }}" role="tab"
                                                aria-controls="messages" aria-selected="true">Messages</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="addoffer-tab" href="{{ route('merchant.offer') }}"
                                                role="tab" aria-controls="addoffer" aria-selected="false">Add Offer</a>
                                        </li>
                                        <li class="nav-item" style="border: 0px solid #ececec; ">
                                            <a class="nav-link" id="advertisment-tab"
                                                href="{{ route('merchant.advertisment') }}" role="tab"
                                                aria-controls="advertisment" aria-selected="false">Advertisment</a>
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

                                    <!-- message-->
                                    <div class="" id="messages" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="row pt-20 pb-20">
                                            <div class="col-lg-6">
                                                <h3>Messages</h3>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('front') }}/imgs/blog/author-22.png"
                                                        alt="" style="width:40px; height:40px;">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
