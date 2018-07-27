@extends('layouts.welcome')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url({{ asset('https://scontent.fbkk20-1.fna.fbcdn.net/v/t1.0-9/21761667_121861738433298_8769087589941803430_n.jpg?_nc_cat=0&oh=6ce5ec0d18384774568349a5ea312a71&oe=5BE1FE28')}}) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">เกี่ยวกับเรา</h2>
                            <nav class="bradcaump-inner">
                              <a class="breadcrumb-item" href="{{ route('/')}}">หน้าหลัก</a>
                              <span class="brd-separetor">-</span>
                              <span class="breadcrumb-item active">เกี่ยวกับเรา</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Construction Area -->
    <section class="htc__best__construction ptb--150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="htc__bst__construc">
                        <div class="section__title text-center">
                            <h2 class="title__line"><span class="text--theme">ประวัติความเป็นมา</span></h2>
                            <p style="width:100%;text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด  ประกอบธุรกิจหลักด้านรับเหมางานระบบ ประกอบตัวอาคารอย่างครบวงจรโดยครอบคลุมตั้งแต่งานออกแบบ-ประมาณราคา,งานติดตั้ง งานระบบประกอบอาคาร ได้แก่ งานระบบไฟฟ้างานระบบปรับอากาศงานระบบสุขาภิบาล  ซึ่ง บุคลากรล้วนมีประสบการณ์ในการท างานโครงการของภาครัฐและเอกชน </p>
                            <p style="width:100%;text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  บริษัท สุทธิกาญจน์ เอ็นจิเนียริ่ง จำกัด เกิดจากการรวมทีมงานวิศวกรรุ่นใหม่ ที่มาก ด้วยประสบการณ์ ซึ่งได้รวมกลุ่มกันขึ้นเพื่อให้การบริการงานออกแบบและงานติดตั้งงานระบบ ประกอบอาคาร สำหรับอาคารทุกประเภท เพื่อให้งานก่อสร้างเสร็จสมบูรณ์ตามเป้าหมายของผู้ ว่าจ้าง  บริษัทได้จดทะเบียนเป็นนิติบุคคล ตามประมวลกฎหมายแพ่งและพาณิชย์ เมื่อวันที่ 11 มกราคม 2554  บริหารงานโดย คุณสุทธิกาญจน์ ปุจฉาการ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Construction Area -->
    <!-- Start Offer Area -->
    <section class="htc__mission__area bg__gray">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-5 col-sm-7 col-xs-12">
                    <div class="htc__mission__container">
                        <div class="single__mission">
                            <h2><i class="fas fa-heart"></i> สิ่งที่เรารักที่จะทำ</h2>
                            <p>On the other hand, we denounce with righteous indignation quasi architecto beatae vitae dicta  beguiled and demoralized by the of pleasure of the moment, so blinded by desire, that they cannot led and demoralized by the charms of pleasure of the moment</p>
                        </div>
                        <div class="single__mission">
                            <h2><i class="fas fa-thumbs-up"></i> พันธกิจของเรา</h2>
                            <p>On the other hand, we denounce with righteous indignation quasi architecto beatae vitae dicta  beguiled and demoralized by the of pleasure of the moment, so blinded by desire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="htc__offer__thumb">
            <div class="htc__offer__thumb__inner">
                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t31.0-8/20786132_115150099104462_119505344772036329_o.jpg?_nc_cat=0&oh=0be03aa7af2272a94ca3408e6b50d5d5&oe=5BD8A419" alt="offer img">
            </div>
        </div>
    </section>
    <!-- End Offer Area -->
    @component('suttikan.rate')
    @endcomponent()
    @component('suttikan.teams')
    @endcomponent()
  </div>
</div>
@endsection
