@extends('frontend.layouts')
@section('title')
Login - Smart Card
@endsection
@section('content')
<!--End header-->
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Sign in
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white card p-3" style="border-radius: 31px;">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h5 class="mb-30" align="center">Welcome to sign in !</h5>

                                    </div>
                                    <form method="POST" action="{{ route('merchant.page.authenticate') }}">
                                        @csrf
                                        @if (session('success'))
                                        <div class="alert alert-success m-4 text-center ml-3">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                        @if (session('error'))
                                        <div class="alert alert-danger m-4 text-center ml-3">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" placeholder="example123@gmail.com" style="height: 45px;">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="********" style="height: 45px;">
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        </div>
                                        <div class="form-group" align="center">
                                            <button type="submit" style="width: 100%;height: 43px;padding: 8px 40px;background-color: #126eb3;border-color: #126eb3;" class="btn btn-heading btn-block hover-up" name="login">Sign
                                                in</button>
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a href="#" style="color:#126eb3;">Forgot password?</a>
                                        </div>
                                        <div align="center">

                                            <a href="{{ route('merchant.page.register') }}" align="center">Don`t
                                                Have an Account? <b style="color: red;font-weight: 600;border-bottom: 2px solid;">Sign
                                                    Up</b></a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
