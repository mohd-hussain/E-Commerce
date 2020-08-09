@extends('Main.layouts.base')

@section('content')
    <section class="breadcrumb login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Vendor Registration</h2>
                            <p>Home <span>-</span> vendor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top">
        <div class="container">
            <!-- <div class="returning_customer">
              <div class="check_title">
                <h2>
                  Returning Customer?
                  <a href="#">Click here to login</a>
                </h2>
              </div>
              <p>
                If you have shopped with us before, please enter your details in the
                boxes below. If you are a new customer, please proceed to the
                Billing & Shipping section.
              </p>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="name" name="name" value=" " />
                  <span class="placeholder" data-placeholder="Username or Email"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="password" class="form-control" id="password" name="password" value="" />
                  <span class="placeholder" data-placeholder="Password"></span>
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="btn_3">
                    log in
                  </button>
                  <div class="creat_account">
                    <input type="checkbox" id="f-option" name="selector" />
                    <label for="f-option">Remember me</label>
                  </div>
                  <a class="lost_pass" href="#">Lost your password?</a>
                </div>
              </form>
            </div>
            <div class="cupon_area">
              <div class="check_title">
                <h2>
                  Have a coupon?
                  <a href="#">Click here to enter your code</a>
                </h2>
              </div>
              <input type="text" placeholder="Enter coupon code" />
              <a class="tp_btn" href="#">Apply Coupon</a>
            </div> -->
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Vendor Details</h1><br>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class=" col-md-12 form-group row ">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="usertype" class="col-md-4 col-form-label text-md-right">Usertype</label>

                            <div class="col-md-6">
                                <input id="usertype" type="text" class="form-control @error('usertype') is-invalid @enderror" name="usertype" value="{{ old('usertype') }}" required autocomplete="usertype" autofocus>

                                @error('usertype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                <!-- <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Blackberry
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Tomatoes
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Brocoli
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span>$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span>Flat rate: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span>$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" />
                  <label for="f-option5">Check payments</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" />
                  <label for="f-option6">Paypal </label>
                  <img src="{{asset('Main/img/product/single-product/card.png')}}" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <a class="btn_3" href="#">Proceed to Paypal</a>
            </div>
          </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
