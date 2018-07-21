<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Suttikan Engineering</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

        <!-- Styles -->
        {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

        <!-- All css files are included here. -->
        <!-- Bootstrap fremwork main css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <!-- Owl Carousel  main css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- This core.css file contents all plugings css file. -->
        <link rel="stylesheet" href="{{ asset('css/core.css') }}">
        <!-- Theme shortcodes/elements style -->
        <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
        <!-- Theme main style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- User style -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- modernizr latest version -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <style>
            body,html{
                font-family: 'Prompt', sans-serif !important;
                color: #1f2d30;
                font-weight: 400;
                font-size: 14px;
                line-height: 24px;
                -webkit-font-smoothing: antialiased;
            }
            p{
                font-family: 'Prompt', sans-serif !important;
                color: #1f2d30;
                font-weight: 400;
                font-size: 14px;
                line-height: 24px;
                -webkit-font-smoothing: antialiased;
            }
            a, h1 ,h2 ,h1 a, h2 a, h3 a, h4 a, h5 a, h6 a , h4{
              font-family: 'Prompt', sans-serif !important;
            }
            ::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                /*border-radius: 10px;*/
                /*background-color: #F5F5F5;*/
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar
            {
                width: 12px;
                /*background-color: #F5F5F5;*/
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #1f2d30;
            }
            .cover {
                position: fixed;
                left: -10px;
                top: 45px;
                width: 101%;
                height: 100%;
                z-index: 1999;
                background-color:#eeeeee;
                -webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -o-filter: blur(5px);
                -ms-filter: blur(5px);
                filter: blur(5px);
            }
            .hr-text {
              line-height: 1em;
              position: relative;
              outline: 0;
              border: 0;
              color: black;
              text-align: center;
              height: 1.5em;
              opacity: 1;
            }
            .hr-text:before {
              content: '';
              background: linear-gradient(to right, transparent, #818078, transparent);
              position: absolute;
              left: 0;
              top: 50%;
              width: 100%;
              height: 1px;
            }
            .hr-text:after {
              content: attr(data-content);
              position: relative;
              display: inline-block;
              color: black;
              padding: 0 .5em;
              line-height: 1.5em;
              color: #fcc236;
              background-color: white;
              font-size: 15px;
              border-radius: 7px;
            }
            .img-responsive-meeenkx{
              width: 260px;
              height: 240px
            }
            .team__thumb{
              margin: auto auto;
              text-align: center;
              background-color: white;
            }
            .team__details h2 a{
              font-family: 'Prompt', sans-serif !important;
              font-size: 15px
            }
            .team__details h4{
              font-family: 'Prompt', sans-serif !important;
              font-size: 12px
            }
            .subscribe__btn input{
              font-size: 15px;
              font-family: 'Prompt', sans-serif !important;
            }
            .fontchange{
              font-family: 'Prompt', sans-serif !important;
              -webkit-font-smoothing: antialiased;
            }
            .changesize{
              font-size: 15px !important;
            }
        </style>
    </head>
    <body>
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- loading zone -->
    <!-- <div class="cover"></div> -->
    <!-- end loading zone -->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <div id="header" class="htc-header">
            <!-- Start Header Top -->
            <div class="htc__header__top bg__cat--1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <ul class="heaher__top__left">
                                <li><i class="fa fa-clock-o"></i>8.30 AM  -  6.30 PM</li>
                                <li><a href="#"><i class="fa fa-phone"></i>0-2551-0815</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="header__top__right">
                                <ul class="login-register">
                                    <li><a href="login-register.html">LOGIN</a></li>
                                    <li class="separator">/</li>
                                    <li><a href="login-register.html">REGISTER</a></li>
                                </ul>
                                <!-- <div class="heaher__top__btn">
                                    <a href="#">สนใจติดต่อ</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/sinply-construction.png" alt="logo image">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li><a href="{{ route('/')}}">HOME</a></li>
                                    <li><a href="{{ route('About') }}">ABOUT</a></li>
                                    <li><a href="service.html">SERVICES</a></li>
                                    <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="service.html">service</a></li>
                                            <li><a href="single-service.html">Single service</a></li>
                                            <li><a href="projects-one.html">projects one</a></li>
                                            <li><a href="projects-two.html">projects two</a></li>
                                            <li><a href="projects-three.html">projects three</a></li>
                                            <li><a href="single-project.html">Single Project</a></li>
                                            <li><a href="blog.html">BLog</a></li>
                                            <li><a href="blog-one-column.html">blog one column</a></li>
                                            <li><a href="blog-two-column.html">blog two column</a></li>
                                            <li><a href="blog-details.html">blog Details</a></li>
                                            <li><a href="login-register.html">Log in & Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">PROJECTS</a>
                                        <ul class="dropdown">
                                            <li><a href="projects-one.html">projects one</a></li>
                                            <li><a href="projects-two.html">projects two</a></li>
                                            <li><a href="projects-three.html">projects three</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="blog.html">BLOG</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">BLog</a></li>
                                            <li><a href="blog-one-column.html">blog one column</a></li>
                                            <li><a href="blog-two-column.html">blog two column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                                <li><a href="index-3.html">Home 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('About')}}">ABOUT</a></li>
                                        <li><a href="#">PROJECTS</a>
                                            <ul>
                                                <li><a href="projects-one.html">projects one</a></li>
                                                <li><a href="projects-two.html">projects two</a></li>
                                                <li><a href="projects-three.html">projects three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="service.html">service</a></li>
                                                <li><a href="single-service.html">Single service</a></li>
                                                <li><a href="projects-one.html">projects one</a></li>
                                                <li><a href="projects-two.html">projects two</a></li>
                                                <li><a href="projects-three.html">projects three</a></li>
                                                <li><a href="single-project.html">Single Project</a></li>
                                                <li><a href="blog.html">BLog</a></li>
                                                <li><a href="blog-one-column.html">blog one column</a></li>
                                                <li><a href="blog-two-column.html">blog two column</a></li>
                                                <li><a href="blog-details.html">blog Details</a></li>
                                                <li><a href="login-register.html">Log in & Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">BLog</a></li>
                                                <li><a href="blog-one-column.html">blog one column</a></li>
                                                <li><a href="blog-two-column.html">blog two column</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 hidden-xs">
                            <div class="htc__header__search">
                                <input type="text" placeholder="SEARCH">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </div>
        <!-- End Header Style -->

        <!-- zone content page -->
        @yield('content')
        <!-- End zone content -->

        @component('suttikan.footer')
        @endcomponent()
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- pacejs loading -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-bounce.min.css"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script type="text/javascript">
    /* loading */
    Pace.on("done", function(){
        $(".cover").fadeOut(1000);
    });
    </script>

    </script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>