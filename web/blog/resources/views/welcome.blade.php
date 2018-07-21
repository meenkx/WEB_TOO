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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    <li><a href="#">HOME</a></li>
                                    <li><a href="about.html">ABOUT</a></li>
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
                                    <li><a href="contact.html">CONTACT</a></li>
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
                                        <li><a href="about.html">ABOUT</a></li>
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
                                        <li><a href="contact.html">contact</a></li>
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
        <!-- Start Slider Area -->
        <div class="slider__container">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__fixed--height slide__align--center" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/2.jpg) no-repeat scroll 0 0 / cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="slider__inner">
                                    <h4>SINCE 2011</h4>
                                    <h1>เราสร้างความไว้วางใจ</h1>
                                    <p>บริษัทรับเหมางานระบบประกอบอาคารอย่างครบวงจร ครอบคลุมตั้งแต่งานออกแบบ ประมาณราคา งานติดตั้ง รวมถึงควบคุมคุณภาพงานและรับปรึกษาปัญหา พร้อมทั้งหาแนวทางแก้ใข</p>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="contact.html">ติดต่อเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__fixed--height slide__align--center" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/1.jpg) no-repeat scroll 0 0 / cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="slider__inner">
                                    <h4>SINCE 2011</h4>
                                    <h1>เราสร้างความไว้วางใจ</h1>
                                    <p>บริษัทรับเหมางานระบบประกอบอาคารอย่างครบวงจร ครอบคลุมตั้งแต่งานออกแบบ ประมาณราคา งานติดตั้ง รวมถึงควบคุมคุณภาพงานและรับปรึกษาปัญหา พร้อมทั้งหาแนวทางแก้ใข</p>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="contact.html">ติดต่อเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Service Area -->
        <section class="htc__service__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="service__section__wrap clearfix">
                        <!-- Start Single Service -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="single-service.html">
                                        <img src="images/service/1.jpg" alt="service images">
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <a href="single-service.html">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__details">
                                    <h2><a href="single-service.html">การก่อสร้าง</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="single-service.html">
                                        <img src="images/service/2.jpg" alt="service images">
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <a href="single-service.html">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__details">
                                    <h2><a href="single-service.html">ตกแต่งภายใน</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="single-service.html">
                                        <img src="images/service/3.jpg" alt="service images">
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <a href="single-service.html">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__details">
                                    <h2><a href="single-service.html">สถาปัตยกรรมโครงสร้าง</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="single-service.html">
                                        <img src="images/service/4.jpg" alt="service images">
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <a href="single-service.html">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__details">
                                    <h2><a href="single-service.html">งานระบบโครงสร้าง</a></h2>
                                    <p style="text-align:center;">(งานระบบไฟฟ้า ประปา สุขาภิบาล ฯลฯ)</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Offer Area -->
        <section class="htc__offer__area htc__offer__2 ht__offr--3 bg__gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5 col-sm-12 col-xs-12">
                        <div class="htc__offer__container">
                            <div class="offer">
                                <div class="offer__icon">
                                    <img src="images/others/icon-2/1.png" alt="icon images">
                                </div>
                                <div class="offer__details">
                                    <h2><a href="#">อันดับสูงสุดของผู้รับเหมาที่น่าเชื่อถือที่สุด</a></h2>
                                    <p>บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด มีโครงการแล้วกว่า 40 โครงการระดับใหญ่ ๆ ทั้งโครงการของภาครัฐและเอกชน ที่มีความใว้วางใจให้บริษัทของเราได้มอบประสบการณ์การทำงานอันแสนยอดเยี่ยม จึงทำให้บริษัทได้รับความน่าเชื่อถือเป็นอย่างมาก</p>
                                </div>
                            </div>
                            <div class="offer">
                                <div class="offer__icon">
                                    <img src="images/others/icon-2/2.png" alt="icon images">
                                </div>
                                <div class="offer__details">
                                    <h2><a href="#">มอบประสบการณ์คุณภาพยอดเยี่ยม</a></h2>
                                    <p>บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด มีบุคคลากรที่มีประสบการณ์ในการทำงานนานหลายปี มีทีมงานวิศวกรรุ่นใหม่ ที่มากด้วยประสบการณ์  ซึ่งมั่นใจได้เลยว่าบริษัทเราจะมอบคุณภาพอันยอดเยี่ยมให้แก่คุณได้อย่างแน่นอน</p>
                                </div>
                            </div>
                            <div class="offer">
                                <div class="offer__icon">
                                    <img src="images/others/icon-2/3.png" alt="icon images">
                                </div>
                                <div class="offer__details">
                                    <h2><a href="#">ประหยัดต้นทุนได้มากกว่า</a></h2>
                                    <p>บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด มีบุคคลากรที่พร้อมรับปรึกษาตั้งแต่งานออกแบบ ประมาณราคา รวมถึงสภาพปัญหาในการทำงาน ซึ่งมั่นใจได้ว่าทำให้ต้นทุนโครงการของคุณราคาเหมาะสมและประหยัดค่าใช้จ่ายได้มากที่สุด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="htc__offer__thumb">
                <div class="htc__offer__thumb__inner" style="padding:45px 0px;">
                    <img src="images/about/1.jpg" alt="offer img" style="height:410px">
                </div>
            </div>
        </section>
        <!-- End Offer Area -->
        <!-- Start Counter Up Area -->
        <section class="htc__counterup__area ptb--50" style="background: rgba(0, 0, 0, 0) url(images/bg/3.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-offset-1 col-lg-9 col-sm-12 col-xs-12">
                        <div class="htc__counterup__wrap">
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__count ">
                                            <span class="count">41</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>โครงการ</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__count ">
                                            <span class="count">37</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>สำเร็จ</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__count " style="text-align:center;">
                                            <span class="count">4</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>อยู่ระหว่างดำเนินการ</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Fact -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Up Area -->
        <!-- Start Latest Project Area -->
        <section class="htc__latest__project__area ptb--150 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">LATEST <span class="text--theme">PROJECTS</span></h2>
                            <p style="font-size: 17px;">ข้อมูลโครงการการรับเหมาก่อสร้างล่าสุด ที่ได้ผลตอบรับเป็นอย่างดีเยี่ยมและเป้นที่น่าเชื่อถือของกลุ่มลูกค้าในหลาย ๆ โครงการ</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="htc__latest__project__wrap clearfix mt--60">
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/1.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">โครงการ FREEZE & DRY  BUILDING</a></h2>
                                            <h4>ระยะเวลา : <span>อยู่ระหว่างดำเนินการ</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/2.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">โครงการ 55 Market</a></h2>
                                            <h4>ระยะเวลา : <span>อยู่ระหว่างดำเนินการ</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/3.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">โครงการกังหันไอน้ำ</a></h2>
                                            <h4>ระยะเวลา : <span>อยู่ระหว่างดำเนินการ</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/4.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">โครงการก่อสร้าง ซ่อมแซม-ปรับปรุง</a></h2>
                                            <h4>ระยะเวลา : <span>3 เดือน</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/5.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">SMC-NR ของบริษัท สยามมอร์ตาร์ จำกัด</a></h2>
                                            <h4>ระยะเวลา : <span>7 เดือน</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="images/lst-project-2/6.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">SCG HOME SOLUTION</a></h2>
                                            <h4>ระยะเวลา : <span>16 เดือน</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Project Area -->
        <!-- Start Team Area -->
        <section class="htc__team__area ptb--120" data--gray__overlay="9.5" style="background: rgba(0, 0, 0, 0) url(images/bg/1.jpg) no-repeat fixed center center / cover ;">
            <div class="htc__team__container">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section__title text-center">
                                <h2 class="title__line">โครงสร้างของ <span class="text--theme">องค์กร</span></h2>
                                <p>บริษัทรับที่มีมากทั้งผู้ที่มีประสบการณ์ โครงการที่สำเร็จลุล่วงไปด้วยดีและทีมงานที่เชี่ยวชาญ ที่จะสามารถทำให้โครงการของคุณเป็นไปตามแผนที่วางใว้ได้อย่างบรรลุเป้าหมาย</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr class="hr-text" data-content="HQ">
                        <div class="col">
                          <div class="htc__team__wrap clearfix mt--30">
                            <!-- Start Single Team -->
                            <div style="margin: auto auto;width: 360px;">
                                <div class="team foo">
                                    <div class="team__inner">
                                        <div class="team__thumb">
                                            <img src="images/team/1.jpg" alt="team image">
                                        </div>
                                    </div>
                                    <div class="team__details">
                                        <h2><a href="#">นายสุทธิกาญจน์ ปุจฉาการ</a></h2>
                                        <h4>กรรมการผู้จัดการ</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Team -->
                          </div>
                        </div>
                        <div class="col">
                          <div class="htc__team__wrap clearfix mt--30">
                            <!-- Start Single Team -->
                            <div style="margin: auto auto;width: 360px;">
                                <div class="team foo">
                                    <div class="team__inner">
                                        <div class="team__thumb">
                                            <img src="images/team/1.jpg" alt="team image">
                                        </div>
                                    </div>
                                    <div class="team__details">
                                        <h2><a href="#">นางรัชนี ปุจฉาการ</a></h2>
                                        <h4>ผู้จัดการทั่วไป</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Team -->
                          </div>
                        </div>
                        <div class="col">
                          <div class="htc__team__wrap clearfix mt--30" style="margin-bottom:30px;">
                              <!-- Start Single Team -->
                              <div class="col-xs-6 col-md-4">
                                  <div class="team foo">
                                      <div class="team__inner">
                                          <div class="team__thumb">
                                              <img src="images/team/1.jpg" alt="team image" class="img-responsive-meeenkx">
                                          </div>
                                      </div>
                                      <div class="team__details">
                                          <h2><a href="#">นางสาวรถประภาพร บุญนิยม</a></h2>
                                          <h4>ฝ่ายบัญชี/การเงิน</h4>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Single Team -->
                              <!-- Start Single Team -->
                              <div class="col-xs-6 col-md-4">
                                  <div class="team foo">
                                      <div class="team__inner">
                                          <div class="team__thumb">
                                              <img src="images/team/2.jpg" alt="team image" class="img-responsive-meeenkx">
                                          </div>
                                      </div>
                                      <div class="team__details">
                                          <h2><a href="#">นางสาววิริยา ชำนาญเวช</a></h2>
                                          <h4>ฝ่ายบุคคล/จัดซื้อ</h4>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Single Team -->
                              <!-- Start Single Team -->
                              <div class="col-xs-6 col-md-4">
                                  <div class="team foo">
                                      <div class="team__inner">
                                          <div class="team__thumb">
                                              <img src="images/team/3.jpg" alt="team image" class="img-responsive-meeenkx">
                                          </div>
                                      </div>
                                      <div class="team__details">
                                          <h2><a href="#">นางสาวแก้วมณี หาญเวช</a></h2>
                                          <h4>ฝ่ายธุรการ/คลังสินค้า</h4>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Single Team -->
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <hr class="hr-text" data-content="SITE">
                      <div class="htc__team__wrap clearfix mt--30" style="margin-top:-20px !important;">
                          <!-- Start Single Team -->
                          <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12 col-md-offset-2">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/1.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายธเนศร์ นิยมจันทร์</a></h2>
                                      <h4>วิศวกรไฟฟ้าโครงการอาวุโส</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/2.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายนันทวุธ ชัยทัศ</a></h2>
                                      <h4>วิศวกรไฟฟ้าโครงการ</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/3.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายอาณัติ ลีลานุช</a></h2>
                                      <h4>วิศวกรไฟฟ้าโครงการ</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2 col-lg-2 hidden-sm col-xs-12">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/4.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายวุฒิชัย รักตะกนิษฐ์</a></h2>
                                      <h4>วิศวกรไฟฟ้าโครงการ</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                      </div>
                      <div class="htc__team__wrap clearfix mt--30" style="margin-bottom:30px;margin-top:-20px !important;">
                          <!-- Start Single Team -->
                          <div class="col-md-2 col-md-offset-1">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/1.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายอารักษ์ รัตนะ</a></h2>
                                      <h4>วิศวกรเครื่องกลโครงการ</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/2.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายกิตติพงศ์   ฟุ้งสันเทียะ</a></h2>
                                      <h4>วิศวกรเครื่องกลโครงการ</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/3.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายประยูร จันทร์เกต</a></h2>
                                      <h4>M&E Auto Cad</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/4.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายสาธิต   ศรีสุวรรณ </a></h2>
                                      <h4>M&E Auto Cad</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                          <!-- Start Single Team -->
                          <div class="col-md-2">
                              <div class="team foo">
                                  <div class="team__inner">
                                      <div class="team__thumb">
                                          <img src="images/team/4.jpg" alt="team image">
                                      </div>
                                  </div>
                                  <div class="team__details">
                                      <h2><a href="#">นายธีระพล สุธรรม</a></h2>
                                      <h4>Supervisor เครื่องกล</h4>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Team -->
                      </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Team Area -->
        <!-- Start Testimonial Area -->
        <section class="htc__testimonial__area testimonial__2 ptb--150 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="htc__testimonial__left">
                            <h2 class="title__line">CLIENTS <span class="text--theme">SAYS</span></h2>
                            <p>On the other hand, we denounce with righteous ation and dislike men who are so beguiled and demorazed by the charms of pleasure of the moment,</p>
                            <p>On the other hand, we denounce with righteous ation and dislike men who are so beguiled</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__testimonial__wrap">
                            <div class="testimonial__activation--2 clearfix">
                                <!-- Start Single Testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__thumb">
                                         <img src="images/test/client/2.jpg" alt="clint image">
                                    </div>
                                    <div class="testimonial__details">
                                        <div class="tes__icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <p>On the other hand, we unce with righteous indignation and the tdislike men who</p>
                                        <h2><a href="#">Ken Williams</a></h2>
                                        <h4>CEO, Alves</h4>
                                    </div>
                                </div>
                                 <!-- End Single Testimonial -->
                                 <!-- Start Single Testimonial -->
                                <!-- End Single Testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__thumb">
                                         <img src="images/test/client/3.jpg" alt="clint image">
                                    </div>
                                    <div class="testimonial__details">
                                        <div class="tes__icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <p>On the other hand, we unce with righteous indignation and the tdislike men who</p>
                                        <h2><a href="#">Ken Williams</a></h2>
                                        <h4>CEO, Alves</h4>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                                <!-- Start Single Testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__thumb">
                                         <img src="images/test/client/2.jpg" alt="clint image">
                                    </div>
                                    <div class="testimonial__details">
                                        <div class="tes__icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and the tdislike men who are beguiled </p>
                                        <h2><a href="#">Ken Williams</a></h2>
                                        <h4>CEO, Alves</h4>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                                <!-- Start Single Testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__thumb">
                                         <img src="images/test/client/3.jpg" alt="clint image">
                                    </div>
                                    <div class="testimonial__details">
                                        <div class="tes__icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and the tdislike men who are beguiled </p>
                                        <h2><a href="#">Ken Williams</a></h2>
                                        <h4>CEO, Alves</h4>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                                <!-- Start Single Testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__thumb">
                                         <img src="images/test/client/2.jpg" alt="clint image">
                                    </div>
                                    <div class="testimonial__details">
                                        <div class="tes__icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and the tdislike men who are beguiled </p>
                                        <h2><a href="#">Ken Williams</a></h2>
                                        <h4>CEO, Alves</h4>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Call to Action Area -->
        <section class="htc__callto__action" data--theme__overlay="9" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callto__action__wrap">
                            <h2># SUTTIKAN ENGINEERING <span><p style="padding-left: 40px;font-size: 15px;margin-top: 5px;">บริษัทรับเหมาก่อสร้างที่หลายคนเลือกใว้วางใจ</p></span></h2>

                            <div class="callto__action__btn">
                                <a class="htc__btn--transparent" href="#">สนใจติดต่อ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call to Action Area -->

        <!-- Start Newsletter Area -->
        <section class="htc__newsletter__area ptb--90 bg__gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="newsletter__wrap">
                            <h2 class="title__line">สมัครรับ <span class="text--theme">ข่าวสาร</span></h2>
                            <h4>สมัครรับจดหมายข่าวของเราและรับการอัปเดตล่าสุด</h4>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="สมัครตอนนี้" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter__thumb">
                <div class="newsletter__thumb__inner">
                    <img src="images/others/1.png" alt="newsletter img">
                </div>
            </div>
        </section>
        <!-- End Newsletter Area -->
        <!-- Start Google Map Area -->
        <div class="map-contacts">
            <div id="googleMap"></div>
            <!-- Start Contact Address -->
            <div class="htc__contact__address add-res htc__contact__address--2">
                <div class="htc__contact__wrap clearfix">
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon map-pin">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                        <div class="ht__address__details">
                            <p>89 ซอยสุขาภิบาล 5 ซอย 5 แยก 10<br>แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10220</p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon glob">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details" style="margin-bottom: 20px;margin-top: 10px;">
                            <p><a href="#"> E-mail : sec_eng@suttikan.co.th</a></p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="#">Tel : 0-2551-0815</a></p>
                            <p><a href="#">Fax : 0-2551-4145</a></p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                </div>
            </div>
            <!-- End Contact Address -->
        </div>
        <!-- End Google Map Area -->
        <!-- Start Footer Area -->
        <footer class="htc__footer__area">
            <div class="footer__top ptb--130" data--1f2d30__overlay="9.5" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat fixed center center / cover ;">
                <div class="container">
                    <div class="row">
                        <div class="htc__footer__wrap clearfix">
                            <!-- Start Single Footer -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="footer">
                                    <div class="footer__widget">
                                        <h2 class="ft__title">ABOUT</h2>
                                    </div>
                                    <div class="ft__details">
                                        <p>บริษัทรับเหมางานระบบประกอบอาคารอย่างครบวงจร ครอบคลุมตั้งแต่งานออกแบบ ประมาณราคา งานติดตั้ง รวมถึงควบคุมคุณภาพงานและรับปรึกษาปัญหา พร้อมทั้งหาแนวทางแก้ใข ซึ่งบุคลากรล้วนมีประสบการณ์ในการทำงานโครงการทั้งภาครัฐและเอกชน</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 xmt-40">
                                <div class="footer quick__link">
                                    <div class="footer__widget">
                                        <h2 class="ft__title">QUICK LINKS</h2>
                                    </div>
                                    <div class="footer__link">
                                        <ul class="ft__menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="projects-one.html">Projects</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                        </ul>
                                        <ul class="ft__menu">
                                            <li><a href="#">Quote</a></li>
                                            <li><a href="projects-one.html">Projects</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Features</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 smt-40 xmt-40">
                                <div class="footer">
                                    <div class="footer__widget">
                                        <h2 class="ft__title">INSTAGRAM</h2>
                                    </div>
                                    <ul class="footer__instagram">
                                        <li><a href="#"><img src="images/blog/sm-img/1.jpg" alt="images"></a></li>
                                        <li><a href="#"><img src="images/blog/sm-img/2.jpg" alt="images"></a></li>
                                        <li><a href="#"><img src="images/blog/sm-img/3.jpg" alt="images"></a></li>
                                        <li><a href="#"><img src="images/blog/sm-img/4.jpg" alt="images"></a></li>
                                        <li><a href="#"><img src="images/blog/sm-img/5.jpg" alt="images"></a></li>
                                        <li><a href="#"><img src="images/blog/sm-img/6.jpg" alt="images"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                            <div class="col-md-3 col-lg-2 col-lg-offset-1 col-sm-6 col-xs-12 smt-40 xmt-40">
                                <div class="footer">
                                    <div class="footer__widget">
                                        <h2 class="ft__title">INQUARY</h2>
                                        <div class="footer__link">
                                            <ul class="ft__menu">
                                                <li><a href="#">Construction</a></li>
                                                <li><a href="#">Architecture</a></li>
                                                <li><a href="#">Plambing</a></li>
                                                <li><a href="#">Plambing</a></li>
                                            </ul>
                                            <ul class="ft__menu">
                                                <li><a href="#">Painting</a></li>
                                                <li><a href="#">Roofing</a></li>
                                                <li><a href="#">Plambing</a></li>
                                                <li><a href="#">Features</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright bg__theme">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright <a href="#" target="_blank">SUTTIKAN ENGINEER CO., LTD.</a>
                                All Rights Reserved {{ date('Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
