@extends('Main.layouts.base')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Your Profile</h2>
                            <p>Home <span>-</span> Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ confirmation part start =================-->
    <section class="confirmation_part padding_top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Basic Details</h4>
                        <ul>
                            <li>
                                <p>ID</p><span>{{Auth()->user()->id}}</span>
                            </li>
                            <li>
                                <p>Full Name</p><span>{{Auth()->user()->name}}</span>
                            </li>
                            <li>
                                <p>Email</p><span>{{Auth()->user()->email}}</span>
                            </li>
                            <li>
                                <p>User Type</p><span>{{Auth()->user()->usertype}}</span>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                

            </div>
            <br><br>
            <!-- <a href="#" class="genric-btn primary circle">Edit</a> -->
        </div>
    </section>

@endsection
