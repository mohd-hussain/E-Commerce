<?php use App\Http\Controllers\Main\MainController; 
$cartCount = MainController::cartCount();
?>

<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AS SHOP</title>
    <link rel="icon" href="{{asset('Main/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/price_rangs.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">  
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="logo navbar-brand" href="/shop"> <img style="height:30px;max-width:100%;" src="{{asset('Main/img/logo.svg')}}" alt="logo"> </a>
    
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/shop">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Shop
                                    </a>
                                           
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <!-- <a class="dropdown-item" href="/categories"> Electronics</a>
                                        <a class="dropdown-item" href="/categories">Fashion</a>
                                        <a class="dropdown-item" href="/categories">Sports</a>
                                        <a class="dropdown-item" href="/categories">Furnitures</a>
                                        <a class="dropdown-item" href="/categories">Books</a> -->
                                         
                                        @if(Auth::guest())
                                           <a class="dropdown-item" href="/login/show">Login</a>
                                        @else   
                                           @foreach($categories as $category)
                                             <a class="dropdown-item" href="/category/{{ $category->id }}"> {{ $category->name }}</a>
                                           @endforeach

                                        @endif   
                                       
                                        
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="category.html">Recommends</a>
                                </li>

                                
                                <li class="nav-item">
                                    <a class="nav-link" href="/contactUs">Contact us</a>
                                </li>
                                
                            </ul>
                        </div>

 

      
      
      
                        <div class="hearer_icon d-flex">  
                         
                           <a style="padding-top: 10px;" id="search_1" href="javascript:void(0)"><i class="ti-search" style="margin:10px;"></i></a>
                            
                            
                            <div class="dropdown cart">
                                
                               
                                <a style="padding-top: 10px;" href="/cart"><i class="fa fa-cart-plus" data-content="{{$cartCount}}" style="margin:10px;"></i></a>
                            </div>
                            
                            

                            <li class="nav-item dropdown" style="list-style:none";>
                            @if(Auth::guest())
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: black;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="fas fa-user-circle" data-content=""></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                <a class="dropdown-item" href="{{ route('login') }}"> Log In kro bahi</a>
                            </div>
                            @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: black;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            
                                

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="/accountInfo"> Account Info</a>
                                        <a class="dropdown-item" href="/orderTrack">Orders</a>
                                        <a class="dropdown-item" href="/cart">Shopping Cart</a>
                                        <a href="/login/show" class="dropdown-item">Customer Registration</a>
                                        
                                        @if(Auth::guest())
                                            <a class="dropdown-item" href="/login/show">Login</a>
                                            @else
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        Sign Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form> 
                                            @endif
                                </div>
                                @endif
                            </li>
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->





    <!-- banner part start-->
    <section class="banner_part section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Macbook-Pro</h1>
                                            <p>Hussain Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                        <img src="/storage/product_images/macbook-pro_1598168965.png" alt="">
                                        
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Macbook-Pro</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="/storage/product_images/macbook-pro_1598168965.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Mackbook-Pro</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="/storage/product_images/macbook-pro_1598168965.png" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Mackbook-Pro</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('Main/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end-->






     <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Recommended for you</h2>
                    </div>
                </div>
            </div>
            
             <div class="row">
                <div class="col-lg-12">
                
                   <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between"> 
                    
                                @foreach($products  as $product)
                                                
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <a href="/single-product/{{ $product->id }}"><img src="/storage/product_images/{{$product->product_image}}" alt=""></a>                                     
                                        <div class="single_product_text">
                                            <h4>{{ $product->name }}</h4>
                                            <h3>{{ $product->price }}</h3></a>
                                            <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                 
                            </div>
                        </div> 
                    </div> 

                </div>
            </div> 

        </div>
    </section> 






    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">

            @foreach($categories as $category)
                <!-- <a class="dropdown-item" href="/category/{{ $category->id }}"> {{ $category->name }}</a> -->
                @if ($loop->iteration % 2 != 0)

                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>{{ $category->name }}</h3>
                        <p>latest Electronics products</p>
                        <a href="/category/{{ $category->id }}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="/storage/category_images/{{$category->category_image}}" alt=""> 
                    </div>
                </div>
                @else 
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>{{ $category->name }}</p>
                        <p>Latest Fashion</p>
                        <a href="/category/{{ $category->id }}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="/storage/category_images/{{$category->category_image}}" alt=""> 
                    </div>
                </div>
                
                @endif
            @endforeach
            </div>
        </div>
    </section>


    <!-- upcoming_event part start-->

    <!-- product_list start-->
    
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{asset('Main/img/offer_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->



    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <a></a><img src="{{asset('Main/img/product/product_1.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_2.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_3.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_4.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_5.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->



<!-- subscribe_area part start-->
<section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
    

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="section_tittle text-center">
                    <h2>Our Brands</h2>
                </div>
                <div class="col-lg-12">
                   
                </div>
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_1.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_2.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_4.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_5.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_1.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_2.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
           <div class="row justify-content-around">
              <div class="col-sm-6 col-lg-2">
                 <div class="single_footer_part">
                    <h4>Top Products</h4>
                    <ul class="list-unstyled">
                       <li><a href="">Electronics</a></li>
                       <li><a href="">Fashion</a></li>
                       <li><a href="">Sports</a></li>
                       <li><a href="">Books</a></li>
                    </ul>
                 </div>
              </div>
             
              <div class="col-sm-6 col-lg-2">
                 <div class="single_footer_part">
                    <h4>Features</h4>
                    <ul class="list-unstyled">
                       <li><a href="">Augmented View</a></li>
                       <li><a href="">Live Tracking</a></li>
                       <li><a href="">Essential Recommendation</a></li>
                       <li><a href="">Easy Pay</a></li>
                    </ul>
                 </div>
              </div>
            
              <div class="col-sm-6 col-lg-4">
                 <div class="single_footer_part">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                    </p>
                    <div id="mc_embed_signup">
                       <form target="_blank"
                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="subscribe_form relative mail_part">
                          <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                             class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                             onblur="this.placeholder = ' Email Address '">
                          <button type="submit" name="submit" id="newsletter-submit"
                             class="email_icon newsletter-submit button-contactForm">subscribe</button>
                          <div class="mt-10 info"></div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
  
        </div>
        <div class="copyright_part">
           <div class="container">
              <div class="row">
                 <div class="col-lg-8">
                   
                 </div>
                 <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                       <ul class="list-unstyled">
                          <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                          <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('Main/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Main/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Main/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('Main/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Main/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Main/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('Main/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('Main/js/slick.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Main/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Main/js/contact.js')}}"></script>
    <script src="{{asset('Main/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.form.js')}}"></script>
    <script src="{{asset('Main/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Main/js/mail-script.js')}}"></script>
    <!-- custom js -->

    <script src="https://kit.fontawesome.com/588cda5f94.js" crossorigin="anonymous"></script>
    <script src="{{asset('Main/js/custom.js')}}"></script>
</body>

</html>