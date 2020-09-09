@extends('Main.layouts.base')

@section('content')
<section class="breadcrumb login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Customer Registration</h2>
                        <p>Home <span>-</span> Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
@include('Main.layouts.message')
<!--================Checkout Area =================-->
<section class="checkout_area padding_top">
    <div class="container">


        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Customer Details</h1>
                    <br>
                    <form class="row contact_form" id="validationForm" action="{{Route('register.store')}}" method="post" novalidate="novalidate">
                       @csrf
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name" placeholder="Full Name"/>
                           <!-- <span class="placeholder" style="left:13%;" ></span> -->
                        </div>


                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="mobile_no" placeholder="Phone number"/>
                           <!-- <span class="placeholder" style="left:35%;"></span> -->
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address"/>
                            <!-- <span class="placeholder" style="left:33%;"></span> -->
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="date" class="form-control" id="dob" name="dob"/>
                            <!-- <span class="placeholder" style="left:36%;"></span> -->
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <!-- <span class="placeholder" style="left:9%;"></span> -->
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" name="country">
                                <option value="India">India</option>
                                <option value="Usa">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                            <!-- <span class="placeholder" style="left:9%;"></span> -->
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="address" placeholder="Address line"/>
                            <!-- <span class="placeholder" style="left:15%;"></span> -->
                        </div>


                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" name="state">
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Maharastra">Maharastra</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                            <!-- <span class="placeholder" style="left:14%;"></span> -->
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city"  placeholder="Town/City"/>
                            <span class="placeholder" style="left:13%;"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="pincode" placeholder="Postcode/ZIP"/>
                            <!-- <span class="placeholder" style="left:13%;"></span> -->
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="p" name="password" placeholder="password"/>
                            <!-- <span class="placeholder" style="left:13%;"></span> -->
                        </div>
                        <div class="col-md-12 form-group">
                            <div
                                class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector" />
                                <label for="f-option2">I agree to the Terms and Conditionns"
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn_3" href="#">Sign UP</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
    <script>
        $('#validationForm').validate({
            rules:{
                // logo:{
                //     required:true
                // },
                name:{
                    required:true,
                },
                mobile_no:{
                    required:true,
                    minlength : 10,
                    maxlength : 10,
                    number:true,
                },
                email:{
                    required:true,
                    email:true,
                },
                dob:{
                    required:true,
                    date:true,

                },
                gender:{
                    required:true,
                    
                },
                country:{
                    required:true,
                    
                },
                address:{
                    required:true,
                },
                state:{
                    required:true,
                    
                },
                city:{
                    required:true,
                },
                pincode:{
                    required:true,
                    number:true,
                },
                password:{
                    required:true,
                    password:true,
                }

            },
            messages: {
                name: "Please specify name",
                mobile_no :{
                    required:"We Need Mobile Number to contact you",
                    minlength: "Please Enter 10 Digits Number",
                    maxlength: "Please Enter 10 Digits Number",

                },
                email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com",
                },
                dob :"Please specify the DOB date",
                gender: "Please specify the gender",
                country: " Please specify the country",
                address: "specify the address",
                state :"Please specify the state",               
                city : "Please specify the city",             
                pincode:"please specufy the pincode",
                password:"Please specify the password",
            }
        });

    </script>

@endsection 
