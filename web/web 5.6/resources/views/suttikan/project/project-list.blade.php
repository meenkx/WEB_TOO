@extends('layouts.welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(https://scontent.fbkk20-1.fna.fbcdn.net/v/t1.0-9/29597427_160298084589663_3296508398913488296_n.jpg?_nc_cat=0&oh=59f0833e4661684df9fe22f19b7f548a&oe=5BE33E0A) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">โปรเจค</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('/') }}">หน้าหลัก</a>
                                <span class="brd-separetor">-</span>
                                <a class="breadcrumb-item" href="{{ route('projectmain') }}">โปรเจค</a>
                                <span class="brd-separetor">-</span>
                                @foreach($detail as $detaila)
                                <span class="breadcrumb-item active">{{ $detaila->name }}</span>
                                @endforeach
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script>
        $(document).ready(function (event) {
            var first_img = $('#imageContainer li:first img');
            var imageContainer = $("#imageContainer");
            $("#main-img").attr("src", $(first_img).attr("src"));
            $("html").css("background-image", "url(" + $(first_img).attr("src") + ")");

            $("#imageBox img").click(function () {
                $("#main-img").attr("src", $(this).attr("src"));
                $("html").css("background-image", "url(" + $(this).attr("src") + ")");
                $("#main-img").fadeOut(0);
                $("#main-img").fadeIn(1000);
            });

            imageContainer.find('ul').on('mousewheel', function (e, delta) {
                this.scrollLeft -= (delta * 50);
                e.preventDefault();
            });
        })
    </script>
    <!-- Start Blog Area -->
    <section class="htc__project__details__page ptb--150 bg__white">
        <div class="container">
            @foreach($detail as $detaila)
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    @if($detaila->image_project)
                        <div class="htc__single__service">
                        <div class="htc__single__service__tab">
                            <div class="ht-portfolio-pic-show">
                                <div class="ht-portfolio-full-image tab-content">
                                    <img id="main-img" src="#" />
                                </div>
                            </div>
                            <!-- Start Small images -->
                            <div class="ht__service__small__image nav nav-tabs clearfix" style="border: 0px">
                                <div id="imageContainer">
                                    <ul id="imageBox">
                                        <?php
                                        $image = explode(",",$detaila->image_project);
                                        for ($i=0;$i<count($image);$i++){
                                        $b = $detaila->name;
                                        $image_url = "/projects/images/".$b."/".$image[$i];
                                        ?>
                                        <li>
                                            <img src="{{ $image_url }}" alt="Project Top" />
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Small images -->
                        </div>
                    </div>
                    @else
                        <div style="background-color: #fafafa;width: 100%;height: 100%;text-align: center;color: #fcc236;padding: 279px 0px;font-size: 35px">
                            <i class="fas fa-sad-tear"></i> โปรเจคนี้ไม่มีรูปภาพแสดง
                        </div>
                    @endif
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="single__project__rightsidebar">
                        <!-- Start Single Item -->
                        <div class="pro__dtl__inner bg__gray">
                            <h2 style="margin-bottom: 30px !important;">PROJECT DETAILS</h2>
                            <div class="pro__dtl__content">
                                <div>
                                    <ul class="pro__dtl__list font__bold"><li style="font-size: 18px">สถานที่</li></ul>
                                    <ul><li style="font-size: 16px">: {{ $detaila->location }}</li></ul>
                                </div>
                                <div style="margin-top: 15px">
                                    <ul class="pro__dtl__list font__bold"><li style="font-size: 18px">เริ่มโครงการ</li></ul>
                                    <ul><li style="font-size: 16px">: {{ $detaila->start_project }}</li></ul>
                                </div>
                                <div style="margin-top: 15px">
                                    <ul class="pro__dtl__list font__bold"><li style="font-size: 18px">สิ้นสุดโครงการ</li></ul>
                                    <ul>
                                        @if($detaila->end_project)
                                            <li style="font-size: 16px">: {{ $detaila->end_project }}</li>
                                        @else
                                            <li style="font-size: 16px">: อยู่ในระหว่างดำเนินโครงการ</li>
                                        @endif
                                    </ul>
                                </div>
                                <div style="margin-top: 15px">
                                    <ul class="pro__dtl__list font__bold"><li style="font-size: 18px">มูลค่างาน</li></ul>
                                    <ul><li style="font-size: 16px">: {{ $detaila->job_value }}</li></ul>
                                </div>
                                <div style="margin-top: 15px">
                                    <ul class="pro__dtl__list font__bold"><li style="font-size: 18px">คู่สัญญา</li></ul>
                                    <ul><li style="font-size: 16px">: {{ $detaila->partner }}</li></ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Start Single Item -->
                        <div class="download__project bg__gray">
                            <h2><a href="#" style="cursor: not-allowed;">โครงการนี้ยังไม่รายงานให้ Download</a></h2>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="htc__pro__desc__container">
                        <!-- start Single Details -->
                        <div class="single__project__details" style="width: 100% !important;">
                            <h2>รายละเอียดโครงการ</h2>
                            {{--<p>...</p>--}}
                            <ul class="facts__list">
                                <li><a href="#" style="font-size: 17px"><i class="fa fa-angle-double-right"></i>{{ $detaila->project_details }}</a></li>
                            </ul>
                        </div>
                        <!-- End Single Details -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Service Area -->
    <section class="htc__project__area bg__white pb--150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line"><span class="text--theme">โปรเจค</span> ที่ผ่านมา</h2>
                        <p>ผลงานที่ผ่านมาล่าสุด ที่ได้รับความใว้วางใจจากลูกค้า ทั้งเรื่องประสบการณ์ที่มอบให้และคุณภาพที่ลูกค้าได้รับ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rl__project__wrap clearfix mt--60 xmt-40">
                    @foreach($RelateProject as $RelateProjecta)
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="/project-detail/{{ $RelateProjecta->CodeName }}">
                                    <?php
                                    $image = explode(",",$RelateProjecta->image_project);
                                    $b = $RelateProjecta->name;
                                    $image_url = "/projects/images/".$b."/".$image[0];
                                    ?>
                                        <img src="{{ $image_url }}" alt="project images" width="270px" height="207px">
                                </a>
                            </div>
                            <p style="text-align: center;margin-top: 10px">โปรเจค : {{ $RelateProjecta->name }}</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    {{--@component('suttikan.newsletter')--}}
    {{--@endcomponent--}}
    @component('suttikan.contactbar2')
    @endcomponent

@endsection