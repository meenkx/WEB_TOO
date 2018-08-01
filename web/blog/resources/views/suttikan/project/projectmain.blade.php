@extends('layouts.welcome')

@section('content')
    <style>
        /*--------------------------------------------------
    [Button]
----------------------------------------------------*/

        .btn-dark-brd {
            position: relative;
            display: inline-block;
            line-height: 1.4;
            color: #34343c;
            text-align: center;
            background: transparent;
            background-image: none;
            border-width: 1px;
            border-style: solid;
            border-color: #34343c;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .btn-dark-brd:focus, .btn-dark-brd:active:focus, .btn-dark-brd.active:focus, .btn-dark-brd.focus, .btn-dark-brd:active.focus, .btn-dark-brd.active.focus {
            outline: none;
        }

        .btn-dark-brd:hover {
            transition-duration: 200ms;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1);
        }

        .btn-dark-brd:hover, .btn-dark-brd:focus, .btn-dark-brd.focus {
            color: #fff;
            background: #34343c;
            border-color: #34343c;
            text-decoration: none;
        }

        .btn-dark-brd:after, .btn-dark-brd:before {
            background: transparent;
        }

        .btn-dark-brd:active, .btn-dark-brd.active {
            background-image: none;
            outline: 0;
        }

        .btn-dark-brd.disabled, .btn-dark-brd[disabled],
        fieldset[disabled] .btn-dark-brd {
            cursor: not-allowed;
            box-shadow: none;
            opacity: .65;
            pointer-events: none;
        }

        .btn-dark-brd .btn-base-element-xs {
            position: absolute;
            top: 0;
            right: 0;
            background: transparent;
            border-left: 1px solid #2b2b31;
            padding: 6px 9px;
        }

        .btn-dark-brd .btn-base-element-sm {
            position: absolute;
            top: 0;
            right: 0;
            background: transparent;
            border-left: 1px solid #2b2b31;
            padding: 9px 11px;
        }

        .btn-dark-brd .btn-base-element-md {
            position: absolute;
            top: 0;
            right: 0;
            background: transparent;
            border-left: 1px solid #2b2b31;
            padding: 12px 13px;
        }

        .btn-dark-brd .btn-base-element-lg {
            position: absolute;
            top: 0;
            right: 0;
            background: transparent;
            border-left: 1px solid #2b2b31;
            padding: 15px 15px;
        }

        .btn-base-sm {
            font-size: 14px;
            font-weight: 300;
            padding: 9px 22px;
        }
        /*--------------------------------------------------
            [Project_more List v4]
        ----------------------------------------------------*/
        .ProjectMore-list-v4 {
            text-align: center;
            background: #fff;
            box-shadow: 15px 15px 15px 0 #eff1f8;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-header {
            border-bottom: 1px solid #e4e8f3;
            padding: 30px 20px;
            margin: 10px 30px;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-header .ProjectMore-list-v4-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            line-height: 1.5;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-header .ProjectMore-list-v4-subtitle {
            display: block;
            font-size: 16px;
            font-weight: 300;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content {
            padding: 25px 20px;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content .ProjectMore-list-v4-price-sign {
            position: relative;
            top: -30px;
            font-size: 20px;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content .ProjectMore-list-v4-price {
            font-size: 70px;
            font-weight: 400;
            line-height: .5;
            letter-spacing: -3px;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content .ProjectMore-list-v4-subprice {
            font-size: 30px;
            font-weight: 400;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content .ProjectMore-list-v4-price-info {
            position: relative;
            display: block;
            letter-spacing: 1px;
        }

        .ProjectMore-list-v4 .ProjectMore-list-v4-content .ProjectMore-list-v4-price-info:before {
            font-size: 22px;
            font-weight: 300;
            content: "/";
            margin-right: 3px;
        }
    </style>
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
                                <span class="breadcrumb-item active">โปรเจค</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Latest Project Area -->
    <section class="htc__latest__project__area ptb--150 bg__white">
        <div class="container">
            <div class="row">
                <div class="htc__latest__project__wrap clearfix">
                    @foreach($ProfileAll as $ProfileAlla)
                    <!-- Start Single Project -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="project foo">
                            <div class="project__thumb">
                                <a href="/project-detail/{{ $ProfileAlla->CodeName }}">
                                    <?php
                                        $a = $ProfileAlla->image_project;
                                        $b = $ProfileAlla->name;
                                        $image = explode(",",$a);
                                        $image_url = "/projects/images/".$b."/".$image[0];
                                    ?>
                                    @if($image[0])
                                        <img src="{{ $image_url }}" alt="project images" width="390px" height="300px">
                                    @endif
                                </a>
                                <div class="project__hover__info">
                                    <div class="project__action" style="padding: 0px 35px">
                                        <h2><a href="/project-detail/{{ $ProfileAlla->CodeName }}">{{ $ProfileAlla->name }}</a></h2>
                                        @if($image[0])
                                            <?php
                                                $start = explode("/",$ProfileAlla->start_project);
                                                $start1 = $start[2]-543;
                                                $start2 = $start[1];
                                                $start3 = $start[0];
                                                $start_final = $start1."-".$start2."-".$start3;

                                                if($ProfileAlla->end_project!=0){
                                                    $end = explode("/",$ProfileAlla->end_project);
                                                    $end1 = $end[2]-543;
                                                    $end2 = $end[1];
                                                    $end3 = $end[0];
                                                    $end_final = $end1."-".$end2."-".$end3;
                                                }
                                                $month = (int)abs((strtotime($end_final) - strtotime($start_final))/(60*60*24*30));
                                            ?>
                                            @if($ProfileAlla->end_project)
                                                <h4>ระยะเวลา : {{ $month }} เดือน</h4>
                                            @else
                                                <h4>อยู่ในระหว่างดำเนินโครงการ</h4>
                                            @endif
                                            <h4 style="margin-top: 5px">มูลค่างาน <span>{{ $ProfileAlla->job_value }}</span></h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Project -->
                    @endforeach
                </div>
            </div>
            <hr style="margin-top: 50px">
            <div class="row">
                <p style="font-size: 20px;font-weight: bold">โปรเจคเพิ่มเติม</p>
                <!-- Project_more List v4 -->
                <div class="bg-color-sky-light">
                    <div class="content-md container">
                        <div class="row">
                            @foreach($ProfileAll as $ProfileAlla)
                                @if(!$ProfileAlla->image_project)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <!-- Project_more List v4 -->
                                <div class="ProjectMore-list-v4 radius-10" style="height: 360px;">
                                    <div class="ProjectMore-list-v4-header">
                                        <h4 class="ProjectMore-list-v4-title">{{ $ProfileAlla->name }}</h4>
                                        <span class="ProjectMore-list-v4-subtitle">
                                            @if($ProfileAlla->end_project)
                                                <h4>ระยะเวลา : {{ (int)abs((strtotime($start_final) - strtotime($end_final))/(60*60*24*30)) }} เดือน</h4>
                                            @else
                                                <h4>อยู่ในระหว่างดำเนินโครงการ</h4>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="ProjectMore-list-v4-content">
                                        <div class="margin-b-40">
                                            {{--<span class="ProjectMore-list-v4-price">7.</span>--}}
                                            <p style="margin-bottom: 7px">มูลค่า</p>
                                            <span class="ProjectMore-list-v4-subprice">{{ $ProfileAlla->job_value }}</span>
                                            <span class="ProjectMore-list-v4-price-info">บาท</span>
                                        </div>
                                        <div class="center-block" style="margin-top: 10px">
                                            <button type="button" class="btn-dark-brd btn-base-sm radius-3" onclick="window.location.href = '/project-detail/{{ $ProfileAlla->CodeName }}'">ดูโปรเจคนี้</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Project_more List v4 -->
                            </div>
                                @endif
                            @endforeach
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <!-- End Project_more List v4 -->
            </div>
        </div>
    </section>
    <!-- End Latest Project Area -->
    {{--@component('suttikan.newsletter')--}}
    {{--@endcomponent--}}
    @component('suttikan.contactbar2')
    @endcomponent


@endsection