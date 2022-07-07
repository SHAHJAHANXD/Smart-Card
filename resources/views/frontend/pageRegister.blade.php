@extends('frontend.layouts')
@section('title')
Register - Smart Card
@endsection
@section('content')
    <!--End header-->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Sign Up
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
                                <div class="login_wrap widget-taber-content background-white card p-3"
                                    style="border-radius: 31px;">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h5 class="mb-30" align="center">Welcome to sign Up !</h5>

                                        </div>
                                        <form method="post" action="{{ route('merchant.post.register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>First Name</label>

                                                <input type="text"  name="first_name"
                                                    placeholder="Enter first name" style="height: 45px;"  value="{{ old('first_name') }}">
                                                    @if ($errors->has('first_name'))
                                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text"  name="last_name"
                                                    placeholder="Enter last name" style="height: 45px;">
                                                    @if ($errors->has('last_name'))
                                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text"  name="email"
                                                    placeholder="example@email.com" style="height: 45px;">
                                                    @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number</label>

                                                <input type="text"  name="phone"
                                                    placeholder="+92112345676" style="height: 45px;">
                                                    @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input  type="password" name="password"
                                                    placeholder="********" style="height: 45px;">
                                                    @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input  type="password" name="password_confirmation"
                                                    placeholder="********" style="height: 45px;">
                                                    @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit"
                                                    style="width: 100%;height: 43px;padding: 8px 40px;background-color: #126eb3;border-color: #126eb3;"
                                                    class="btn btn-heading btn-block hover-up" name="register">Sign
                                                    UP</button>
                                            </div>
                                            <div align="center">

                                                <a href="{{ route('merchant.page.login') }}" align="center">Already Have
                                                    an Account? <b
                                                        style="color: red;font-weight: 600;border-bottom: 2px solid;">Sign
                                                        In</b></a>
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
