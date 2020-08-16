<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="logo navbar-brand" href="index.html"> <img style="height:30px;max-width:100%;" src="{{asset('Main/img/logo.svg')}}" alt="logo"> </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/homeshop">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">Add to Cart</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="login.html"> login</a>
                                    <a class="dropdown-item" href="tracking.html">tracking</a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="blog.html"> blog</a>
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                </div>
                            </li> -->
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/contactUs">Contact us</a>
                            </li>

                             @if(Auth::guest())
                                <li class="nav-item">
                                    <a class="btn-sm vendorbtn" href="/vendor">Register Now</a>
                                </li>
                                
                                @endif
                        </ul>
                    </div>

                    <div class="hearer_icon d-flex">
                          
                        <!-- <a style="padding-top: 10px;" href="/cart"><i class="fa fa-cart-plus"><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></i></a> -->
                        <button type="button" class="btn btn-info" data-toggle="dropdown">
                             <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                       </button>

                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                             role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i style="padding-top: 5px;" class="fas fa-user-circle"></i>
                             
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                             <a class="dropdown-item" href="/login/show"> Account Info</a>
                             <a class="dropdown-item" href="tracking.html">Orders</a>
                             <a class="dropdown-item" href="cart.html">Shopping Cart</a>
                             <!-- <a class="dropdown-item" href="elements.html">Sign Out  </a> -->
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

                     </li>


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