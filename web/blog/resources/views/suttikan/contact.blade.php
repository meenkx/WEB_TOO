@extends('layouts.welcome')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url({{ asset('https://scontent.fbkk20-1.fna.fbcdn.net/v/t1.0-9/22154199_123790944907044_3164464005034116161_n.jpg?_nc_cat=0&oh=6a9c2ab488f04c53410eda2a40866a10&oe=5BC9B8C6')}}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">ติดต่อ</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="{{ route('/') }}">หน้าหลัก</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">ติดต่อ</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="htc__contact__area bg__white ptb--150">
            <div class="container">
                <div class="row pb--100">
                    <div class="col-md-12">
                        <div class="htc__contact__inner">
                            <h2 class="title__line--5">ข้อมูลการติดต่อ</h2>
                            <p>บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด</p>
                            <p style="margin-top:5px">สำนักงานใหญ่ :<span> 89 ซอยสุขาภิบาล 5 ซอย 5 แยก 10 แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10220</span></p>
                            <p style="margin-top:5px">ที่ทำการสาขา :<span> 101/1-2 ถนนสุขาภิบาล 5 ซอย 5 แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10220 </span></p>
                        </div>
                        <div class="htc__address__container">
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="ct__details">
                                    <p>89 ซอยสุขาภิบาล 5 ซอย 5 แยก 10<br>แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10220</p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ct__details">
                                  <p><a href="#">Tel : 0-2551-0815</a></p>
                                  <p><a href="#">Fax : 0-2551-4145</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="ct__details" style="margin-bottom: 20px;margin-top: 10px;">
                                  <p><a href="#"> E-mail : sec_eng@suttikan.co.th</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="htc__google__map">
                            <h2 class="title__line--5">ที่ที่เราอยู่</h2>
                            <div class="map__contacts">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="htc__contact__form__wrap">
                            <h2 class="title__line--5">ส่งข้อความหาเรา <i class="fas fa-smile-wink" style="color:#fcc236;"></i></h2>
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="{{ route('MailSender') }}" method="POST">
                                    @csrf
                                    <div class="single-contact-inner">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <span class="changesize">ชื่อของคุณ (ชื่อ - นามสกุล) <span style="color:red">*</span></span>
                                                <input type="text" name="name" value="นาย ธนมงคล แย้มเดช" autofocus required>
                                            </div>
                                            <div class="contact-box email">
                                                <span class="changesize">ชื่อ E - mail <span style="color:red">*</span></span>
                                                <input type="email" name="email" value="tyamdej@mail.com" required>
                                            </div>
                                            <div class="contact-box subject">
                                                <span class="changesize">หัวข้อเรื่อง <span style="color:red">*</span></span>
                                                <input type="text" name="subject" value="รายงานระบบหน้าเว็บ" required>
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box message">
                                                <span class="changesize">ระบุข้อความที่จะติดต่อ <span style="color:red">*</span></span>
                                                <textarea name="message" required>ระบบหน้าเว็บมีปัญหา</textarea>
                                            </div>
                                            <div class="contact-btn">
                                                <button type="submit" class="htc__btn btn--theme fontchange changesize">ส่งข้อความ</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{--<div class="form-output">--}}
                                {{--<p class="form-messege"></p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Address -->
        @component('suttikan.newsletter')
        @endcomponent()

      </div>
    </div>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(13.872387, 100.634905), // Suttikan Engineering

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                 styles:
                    [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        }
                    ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(13.872387, 100.634905),
                map: map,
                title: 'Construction !',
                icon: '{{ asset('images/icons/map.png') }}',
                animation:google.maps.Animation.BOUNCE
            });
        }
    </script>
@endsection
