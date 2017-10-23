<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">


  <link href="{{ asset('/frontend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- PE Icon 7 Stoke -->
        <link href="{{ asset('/frontend/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
        <link href="{{ asset('/frontend/fonts/pe-icon-7-stroke/css/helper.css') }}" rel="stylesheet">
        <!-- PE Icon Social -->
        <link href="{{ asset('/frontend/fonts/pe-icon-social/css/pe-icon-social.css') }}" rel="stylesheet">
        <link href="{{ asset('/frontend/fonts/pe-icon-social/css/helper.css') }}" rel="stylesheet">
        <!-- Quicksand Dash -->
        <link href="{{ asset('/frontend/fonts/quicksand-dash/stylesheet.css') }}" rel="stylesheet">
        

    <link href="{{ asset('/frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/scripts/Nivo-Lightbox/nivo-lightbox.css') }}" rel="stylesheet">

    <link href="{{ asset('/frontend/scripts/Nivo-Lightbox/themes/default/default.css') }}" rel="stylesheet">

    <link href="{{ asset('/frontend/css/jquery.nouislider.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/frontend/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">


                   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            
</head>

<body>

<header class="header fixed clearfix">
        <div class="container">
        <div class="row">
            <div class="left col-sm-3">
                <div class="logo"><a href=" {{ url('/') }}"><img src=" {{ asset('/frontend/images/logo.png') }} " alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                <form class="header-search">
                    <input placeholder="I’m searching for ..." type="text">
                    <button type="submit"><i class="pe-7s-search"></i></button>
                </form>
            </div> <!-- end .left -->
            <div class="navigation clearfix col-lg-9 col-lg-push-3 text-right" style="left:0%">
             @include('layouts/navigation')
               
            </div> <!-- end .navigation --> 
            </div>
            </div>
            
        </header>
        
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
  
        <footer class="footer">
        <div class="container inner">                   
                    <div class="row">
                        <div class="col-sm-6 col-md-5"> 
                                <div class="logo"><a href="index.html"><img src="{{ asset('/frontend/images/logo-dark.png') }}" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                                <p class="text-justify">Dictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet etDictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet. </p>                             
                              <!-- end .services -->
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Navigation</h3><ul class="footer-links"> 
                                                        <li><a href="{{ url('/') }}"> DISPENSARIES</a></li>
                            <!-- <li><a href="#"> DOCTORS</a></li>
                            <li><a href="#"> PROMO VIDEO</a></li> -->
                            <li><a href="{{ url('/') }}"> BRANDS</a></li>
                            <!-- <li><a href="#"> THERAPEUTIC USES OF CANNIBIS </a></li>
                            <li><a href="#"> WEEDULU PROMO AD SPOT</a></li> --></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Connect</h3><ul class="footer-links"> 
                            <li><a href="#" target="_blank"> FACEBOOK</a></li>
                            <li><a href="#" target="_blank"> INSTAGRAM</a></li>
                            <li><a href="#" target="_blank"> TWITTER</a></li>
                            <li><a href="#" target="_blank"> GOOGLE+</a></li>
                            <li><a href="#" target="_blank"> YOUTUBE</a></li></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-3 col-sm-6 mobileapplinks">
                            <h3>Mobile Apps</h3>
                            <ul class="footer-links">
                            <li><a href=""><i class="fa fa-apple"></i> Download for IOS</a></li>
                            <li><a href=""><i class="fa fa-android"></i> Download for ANDROID</a></li>
                            </ul>
                        </div> <!-- end .col-sm-4 -->
                    </div> <!-- end .row -->
                </div> 
            <div class="bottom">Copyright &copy; 2017, Weedulu. All Rights Reserved</div>
        </footer> <!-- end .footer -->


<div class="login-wrapper">
            <div class="login">
                @include('auth.login')
            </div> <!-- end .login -->
        </div>


<div class="signup-wrapper">
            <div class="signup">

@include('auth.register')

            </div>
        </div>

        <script type="text/javascript"  src="{{ asset('/frontend/js/jquery-3.1.0.min.js') }}"></script>
                <script type="text/javascript"  src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>

                        <script type="text/javascript"  src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('/frontend/js/richmarker.js') }}"></script>
                         <script type="text/javascript" src="{{ asset('/frontend/js/countdown.js') }}"></script>
                                                         <script type="text/javascript"  src="{{ asset('/frontend/js/sweetalert.min.js') }}"></script>

                          <script type="text/javascript" src="{{ asset('/frontend/scripts/Nivo-Lightbox/nivo-lightbox.min.js') }}"></script>
                                                                  <script type="text/javascript"  src="{{ asset('/frontend/js/jquery.nouislider.all.min.js') }}"></script>

                           <script type="text/javascript" src="{{ asset('/frontend/js/bootstrap-select.min.js') }}"></script>
                            <script type="text/javascript" src="{{ asset('/frontend/js/jquery.nicescroll.min.js') }}"></script>
                                         <script type="text/javascript"  src="{{ asset('/frontend/js/scripts.js') }}"></script>

                           
<script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="https://www.youtube.com/player_api"></script>

        </body></html>