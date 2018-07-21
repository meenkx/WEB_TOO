@extends('layouts.welcome')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
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
                                      <a class="htc__btn" href="{{ route('contact') }}">ติดต่อเรา</a>
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
                                      <a class="htc__btn" href="{{ route('contact') }}">ติดต่อเรา</a>
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

      @component('suttikan.counterup')
      @endcomponent()

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

      @component('suttikan.teams')
      @endcomponent()

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

      @component('suttikan.newsletter')
      @endcomponent()

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
    </div>
</div>
@endsection
