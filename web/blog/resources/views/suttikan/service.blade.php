@extends('layouts.welcome')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(https://scontent.fbkk20-1.fna.fbcdn.net/v/t1.0-9/22688789_127396924546446_1996982317564014124_n.jpg?_nc_cat=0&oh=e6d7b485cd378c90743630cfac3539bf&oe=5C10A777) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">บริการ</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('/') }}">หน้าหลัก</a>
                                <span class="brd-separetor">-</span>
                                <span class="breadcrumb-item active">บริการ</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    @component('suttikan.rate')
    @endcomponent()
    <!-- Start Service Area -->
    <section class="htc__service__area service__page bg__gray ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">OUR <span class="text--theme">SERVICES</span></h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service__section__wrap clearfix">
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/29572745_160325967920208_5202755793107729624_n.jpg?_nc_cat=0&oh=d9c0580d00f46dff4fa1d85665d33724&oe=5BCFBC24" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
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
                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/21432999_160298257922979_8225044877828681988_n.jpg?_nc_cat=0&oh=de9912b9f1c9b93d7ad9485596aa6549&oe=5BE537B8" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
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
                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/21761531_121590808460391_1740985147111001508_n.jpg?_nc_cat=0&oh=c2a7323fcf495366cdc9a5055043942d&oe=5C0FED1A" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
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
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/21369410_119465375339601_2880378424628902752_n.jpg?_nc_cat=0&oh=6b77f7e370e66bafea65f669e798fa21&oe=5BDA9200" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
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
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="images/service/5.jpg" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__details">
                                <h2><a href="single-service.html">LAMINATE FLOORING</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="images/service/6.jpg" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__details">
                                <h2><a href="single-service.html">CONSULTING</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="images/service/7.jpg" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__details">
                                <h2><a href="single-service.html">INTERIOR DESIGN</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="single-service.html">
                                    <img src="images/service/8.jpg" alt="service images" width="277px" height="207px">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="single-service.html">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__details">
                                <h2><a href="single-service.html">PROJECT PLANNING</a></h2>
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
