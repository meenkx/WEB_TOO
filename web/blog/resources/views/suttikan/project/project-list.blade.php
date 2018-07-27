@extends('layouts.welcome')

@section('content')
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
                                <span class="breadcrumb-item active">SCG HOME</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->
    <section class="htc__project__details__page ptb--150 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="htc__single__service">
                        <div class="htc__single__service__tab">
                            <div class="ht-portfolio-pic-show">
                                <div class="ht-portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                        <img src="images/blog/big-images/5.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                        <img src="images/blog/big-images/5.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                        <img src="images/blog/big-images/5.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-4">
                                        <img src="images/blog/big-images/5.jpg" alt="full-image">
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
                                    <li role="presentation" class="pot-small-img img-tab-3">
                                        <a href="#img-tab-3" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/3.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img img-tab-4">
                                        <a href="#img-tab-4" role="tab" data-toggle="tab">
                                            <img src="images/service/small-img/4.jpg" alt="small-image">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Small images -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="single__project__rightsidebar">
                        <!-- Start Single Item -->
                        <div class="pro__dtl__inner bg__gray">
                            <h2>PROJECT DETAILS</h2>
                            <div class="pro__dtl__content">
                                <ul class="pro__dtl__list font__bold">
                                    <li>สถานที่ </li>
                                    <li>เริ่มโครงการ </li>
                                    <li>สิ้นสุดโครงการ </li>
                                    <li>มูลค่างาน </li>
                                    <li>คู่สัญญา </li>
                                </ul>
                                <ul class="pro__dtl__list">
                                    <li>: อ.เมือง จ.พิษณุโลก</li>
                                    <li>: 02/08/2559</li>
                                    <li>: 25/12/2559</li>
                                    <li>: 18,511,000 บาท</li>
                                    <li>: บริษัท วี.เค.บี.คอนแทรคติ้ง จำกัด</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Start Single Item -->
                        <div class="download__project bg__gray">
                            <h2><a href="#">DOWNLOADPROJECT REPORT</a></h2>
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
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>ติดต้ังงานระบบไฟฟ้าและสื่อสาร , งานระบบปรับอากาศและระบายอากาศ , งานระบบสุขาภิบาลและดับเพลิง</a></li>
                            </ul>
                        </div>
                        <!-- End Single Details -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Service Area -->
    <section class="htc__project__area bg__white pb--150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">RELATED <span class="text--theme">PROJECTS</span></h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rl__project__wrap clearfix mt--60 xmt-40">
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="single-project.html">
                                    <img src="images/lst-project-2/1.jpg" alt="project images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="single-project.html">
                                    <img src="images/lst-project-2/2.jpg" alt="project images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="single-project.html">
                                    <img src="images/lst-project-2/3.jpg" alt="project images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="single-project.html">
                                    <img src="images/lst-project-2/4.jpg" alt="project images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    @component('suttikan.newsletter')
    @endcomponent
    @component('suttikan.contactbar2')
    @endcomponent
@endsection