

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
    <link rel="stylesheet" href="{{asset('Main/css/lightslider.min.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/nice-select.css')}}">
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

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

    <style>
        #preview{
            width:100%;
            height: 100%;
            margin:0px auto;
        }
    </style>
</head>

<body>
<!--::header part start::-->
@include('Main.layouts.header')
<!-- Header part end-->
 
<main>
<!-- @include('Main.layouts.message')  -->
    @yield('content')
    
</main>
<!--::footer_part start::-->
@include('Main.layouts.footer')
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
    <script src="{{asset('Main/js/lightslider.min.js')}}"></script>
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
    <script src="{{asset('Main/js/stellar.js')}}"></script>

    <!-- custom js -->

{{--    <script src="{{asset('Main/https://kit.fontawesome.com/588cda5f94.js')}}" crossorigin="anonymous"></script>--}}
    <script src="{{asset('Main/js/theme.js')}}"></script>
    <script src="{{asset('Main/js/custom.js')}}"></script>
    <script src="https://kit.fontawesome.com/588cda5f94.js" crossorigin="anonymous"></script>
  
    @yield('js')
</body>

</html>
