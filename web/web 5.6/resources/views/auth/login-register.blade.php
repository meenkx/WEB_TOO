@extends('layouts.welcome')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">เข้าสู่ระบบ & สมัครสมาชิก</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('/')  }}">หน้าหลัก</a>
                                <span class="brd-separetor">-</span>
                                <span class="breadcrumb-item active">เข้าสู่ระบบ & สมัครสมาชิก</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Login Register Area -->
    <div class="htc__login__register bg__white ptb--150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="login__register__menu" role="tablist" style="max-width: 417px;">
                        <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">เข้าสู่ระบบ</a></li>
                        <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">สมัครสมาชิก</a></li>
                    </ul>
                </div>
            </div>
            <!-- Start Login Register Content -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="htc__login__register__wrap">
                        <!-- Start Single Content -->
                        <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                            <form id="FormLogin" class="login" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                                {{--<input type="text" placeholder="User Name*">--}}
                                <input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="ชื่อผู้ใช้งาน *" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                                {{--<input type="password" placeholder="Password*">--}}
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="รหัสผ่านผู้ใข้งาน *" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </form>
                            {{--<div class="tabs__checkbox">--}}
                                {{--<input type="checkbox">--}}
                                {{--<span> Remember me</span>--}}
                                {{--<span class="forget"><a href="#">Forget Pasword?</a></span>--}}
                            {{--</div>--}}
                            <div class="htc__login__btn mt--30">
                                <a href="#" onclick="document.getElementById('FormLogin').submit();">เข้าสู่ระบบ</a>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                            <form id="FormRegister" class="login" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf
                                <input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="ชื่อผู้ใช้งาน *" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                                {{--<input type="text" placeholder="ชื่อ-นามสกุล *">--}}
                                <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="ชื่อ-นามสกุล *" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                {{--<input type="email" placeholder="E-mail *">--}}
                                <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail *" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                {{--<input type="password" placeholder="รหัสผ่าน *">--}}
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="รหัสผ่าน *" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <input id="password-confirm" type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน *" required style="margin-bottom: 20px;margin-top: 40px;">

                            </form>
                            {{--<div class="tabs__checkbox">--}}
                                {{--<input type="checkbox">--}}
                                {{--<span> Remember me</span>--}}
                            {{--</div>--}}
                            <div class="htc__login__btn" style="margin-top: 10px">
                                <a href="#" onclick="document.getElementById('FormRegister').submit();">{{ __('สมัครสมาชิก') }}</a>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- End Login Register Content -->
        </div>
    </div>
    <!-- End Login Register Area -->

@endsection