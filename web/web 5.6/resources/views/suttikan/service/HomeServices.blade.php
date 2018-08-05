@extends('layouts.welcome')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(https://scontent.fbkk2-6.fna.fbcdn.net/v/t31.0-8/20900643_115147779104694_6439232294558460282_o.jpg?_nc_cat=0&oh=932d57de66435b1ed0e1b2c0de8c43af&oe=5BD6DFAD) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">รายละเอียดแต่ละบริการ</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('/') }}">Home</a>
                                <span class="brd-separetor">-</span>
                                <a class="breadcrumb-item" href="{{ route('service') }}">Service</a>
                                <span class="brd-separetor">-</span>
                                <span class="breadcrumb-item active">รายละเอียดแต่ละบริการ</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->
    <section class="htc__blog__details__page ptb--150 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="htc__page__sidebar">
                        <!-- Start Single -->
                        <div class="htc__category bg__gray">
                            <h2 class="sidebar__title">หมวดหมู่</h2>
                            <ul class="cat__list">
                                <li><a href="#">การก่อสร้าง</a></li>
                                <li><a href="#">ตกแต่งภายใน</a></li>
                                <li><a href="#">สถาปัตยกรรมโครงสร้าง</a></li>
                                <li><a href="#">งานระบบสุขาภิบาล</a></li>
                                <li><a href="#">งานระบบปรับอากาศ</a></li>
                                <li><a href="#">งานระบบสื่อสาร</a></li>
                                <li><a href="#">งานระบบไฟฟ้า</a></li>
                            </ul>
                        </div>
                        <!-- End Single -->
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="htc__single__service">
                        <div class="htc__single__service__tab">
                            <div class="ht-portfolio-pic-show">
                                <div class="ht-portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                        <img src="images/blog/big-images/4.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                        <img src="images/blog/big-images/3.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                        <img src="images/blog/big-images/2.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-4">
                                        <img src="images/blog/big-images/1.jpg" alt="full-image">
                                    </div>
                                </div>
                            </div>
                            <!-- Start Small images -->
                            <div class="ht__service__small__image nav nav-tabs clearfix">
                                <ul role="tablist" class="prodict-det-small  clearfix">
                                    <li role="presentation" class="pot-small-img img-tab-1 active">
                                        <a href="#img-tab-1" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/1.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img img-tab-2">
                                        <a href="#img-tab-2" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/2.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img img-tab-3 xmt-20">
                                        <a href="#img-tab-3" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/3.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img img-tab-4 xmt-20">
                                        <a href="#img-tab-4" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/4.jpg" alt="small-image">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Small images -->
                        </div>
                        <div class="htc__service__dtl">
                            <!-- Start Single Service -->
                            <div class="htc__ser__dtl">
                                <h2 class="title__line--4">CONSTRUCTION</h2>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled demoralized On the other hand, we denounce with pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents </p>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="htc__ser__dtl__inner">
                                <div class="htc__ser__dtl">
                                    <h2 class="title__line--4">PROJECT ANALYSIS</h2>
                                    <p>On the other hand, we denounce with righteous indignion and dislike men who are so beguiled demoralized On the er hand, we denounce with pain and trouble that are und to ensue; and ual blame belongs to those who win</p>
                                </div>
                                <div class="htc__ser__dtl">
                                    <h2 class="title__line--4">PROJECT COSTING</h2>
                                    <p>On the other hand, we denounce with righteous indignion and dislike men who are so beguiled demoralized On the er hand, we denounce with pain and trouble that are und to ensue; and ual blame belongs to those who win</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="htc__ser__dtl__inner">
                                <div class="htc__ser__dtl">
                                    <h2 class="title__line--4">PROJECT PLANNING</h2>
                                    <p>On the other hand, we denounce with righteous indignion and dislike men who are so beguiled demoralized On the er hand, we denounce with pain and trouble that are und to ensue; and ual blame belongs to those who win</p>
                                </div>
                                <div class="htc__ser__dtl">
                                    <h2 class="title__line--4">PROJECT STRATEGY</h2>
                                    <p>On the other hand, we denounce with righteous indignion and dislike men who are so beguiled demoralized On the er hand, we denounce with pain and trouble that are und to ensue; and ual blame belongs to those who win</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    @component('suttikan.contactbar2')
    @endcomponent
@endsection