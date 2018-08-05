{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suttikan Engineering | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ================== GOOGLE FONTS ==================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <!-- ======================= GLOBAL VENDOR STYLES ========================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin_dashboard/vendor/metismenu/dist/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_dashboard/vendor/switchery-npm/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- ======================= LINE AWESOME ICONS ===========================-->
    {{--<link rel="stylesheet" href="{{ asset('admin_dashboard/css/icons/line-awesome.min.css') }}">--}}
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
    {{--<link rel="stylesheet" href="{{ asset('admin_dashboard/css/icons/simple-line-icons.css') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <!-- ======================= DRIP ICONS ===================================-->
    {{--<link rel="stylesheet" href="{{ asset('admin_dashboard/css/icons/dripicons.min.css') }}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dripicons@2.0.0/webfont/webfont.css">
    <!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
    {{--<link rel="stylesheet" href="../admin_dashboard/css/icons/material-design-iconic-font.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- ======================= PAGE VENDOR STYLES ===========================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- ======================= GLOBAL COMMON STYLES ============================-->
    <link rel="stylesheet" href="{{ asset('admin_dashboard/css/common/main.bundle.css') }}">
    <!-- ======================= LAYOUT TYPE ===========================-->
    <link rel="stylesheet" href="{{ asset('admin_dashboard/css/layouts/vertical/core/main.css') }}">
    <!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{ asset('admin_dashboard/css/layouts/vertical/menu-type/compact.css') }}">
    <!-- ======================= THEME COLOR STYLES ===========================-->
    <link rel="stylesheet" href="{{ asset('admin_dashboard/css/layouts/vertical/themes/theme-g.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_font/bootstrap_font.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <style>
        .navbar-form{
            top: -1000%;
        }
    </style>
</head>

<body class="compact-menu">

<!-- START APP WRAPPER -->
<div id="app">
    <!-- START MENU SIDEBAR WRAPPER -->
    <aside class="sidebar sidebar-left">
        <div class="sidebar-content">
            <div class="aside-toolbar">
                <ul class="site-logo">
                    <li>
                        <!-- START LOGO -->
                        <a href="{{ route('/') }}">
                            <div class="logo">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 181 181"><title>20842042_115148189104653_7971321953798217301_n</title><image width="181" height="181" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALUAAAC1CAYAAAAZU76pAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDAgNzkuMTYwNDUxLCAyMDE3LzA1LzA2LTAxOjA4OjIxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTgtMDctMjJUMTM6MDA6MzArMDc6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE4LTA3LTI3VDE5OjU5OjIxKzA3OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE4LTA3LTI3VDE5OjU5OjIxKzA3OjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhmMmZjMjM0LWM5NzEtNDU3Yy1iYmYwLTUwMTkyMmNkZWY2MSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDphY2QwNWNhNy1iOGE3LTQ1MTAtOTRmZC1kYzAyNjE1YzkxM2EiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphY2QwNWNhNy1iOGE3LTQ1MTAtOTRmZC1kYzAyNjE1YzkxM2EiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmFjZDA1Y2E3LWI4YTctNDUxMC05NGZkLWRjMDI2MTVjOTEzYSIgc3RFdnQ6d2hlbj0iMjAxOC0wNy0yMlQxMzowMDozMCswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjhmMmZjMjM0LWM5NzEtNDU3Yy1iYmYwLTUwMTkyMmNkZWY2MSIgc3RFdnQ6d2hlbj0iMjAxOC0wNy0yN1QxOTo1OToyMSswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+P9QCjgAADIhJREFUeJztnb2T3EgVwJ98K/d4bq3F8mqqKJJ1Sp2LiOgcEnH8B5iycwi4zM5IqLvMDsiOwFtr/oODKgoy7Ogiyk4gsYkopL22R7snr6ydHYIdGTEr7eijP95rvV+2WzOa7te/efPUUre85XIJDOMSV2w3gGFUw1IzzsFSM87BUjPOwVIzzrFluwGOoGsKydN0XKdhqbthev6z6fNY9ktgqZvBPIFf1zYWfQVL/T8wS9yG9faPVnKWmr7MTVT7NSrBxyq1qyI3UfZ3FHKPSeqxiVzHKLL3GKRmmetxNnu7LDXL3A7n5HZRapa5H87I7ZLULLMayMvtyr0fLLR6lkA0rtSlJht4QpCLL9Xyg1ygiUOqJKGYqVloe5CIPTWpSQTVcdCXfFSkRh/IEYJ2PChIjTZ4DM6xwXyiiDJgzAXQnURizdQsND3QjBlGqdEEh+kMirHDJjWKoDCDsD6GmKS2HgxGGVbHEovULLR7WBtTDLMfLgit88yfcnyWYGFWxLbUVAfM5ECtfxa1mBkX26bU1AYHyzxstR1UYmhUbFtSUxkMLCI3QUlwY2LbOFHEHnyA8+BjF3odCm02MvampcYuNAUxNoG9D9odMCk1ZqGxi9AHzH3S6gKWeWpbYB54VWDtozaxTUmNMUtjHGidYJVbOSakxib0aAa3AUx91+KGbqkxCs3g+mIrd2QsNTWmQcQElpgoFVun1FiyNJaBw4pz8dElNQtNCwxxUuaMy+UHhoGiBIYSTYnYOqTGkKVtDw5lyMdOtdQstBvYjOFgh1wrP1hodZAVW6XUtrM0C60ekjFVJTULzaimt1O2l3OpALXQ83n6KM/zHwPAzmQi9gAArl279ivf9/fL10gpD05PF7eEEN/4/tZ/ptPpl30+K8uyBwAAfd/fgAf2k1YnvOVSSXttdRqd0FLKg8VicSeKor2m12RZ9rAqXpqmR0EQbFdfk+d5MZ+n/xBC/HVnJ/h80+euH2M+Tx+3eV8HyIyxivKDTGd1kWXZgyRJXgHAMgzDu5cJ3RYhhD+bRZ/s7AS/BoBlkiSviqK4V/faOE5erH8pJhPxy6FtWANNvDfh2uyHUbIse5Cm6dF0Ov1ChciXEUXRnu/7T/I8fy+lPCj/L6U8mM2iT9ZfL4TwNTTDhtidk+bQmnq0WTpJkle6Ra5DCOELIe4CwF0AgDAMTTcBPRQztVWhVyXA0obQSECfrYdITeqMWAVSygPf958MPY7v+/+u/n1ykr8eekzDWP+lvAxqmdpaMKWUB2EY3h3w/qQoivsA4FWn8wAAZrPoNgB483n6WEqZDGzq6Ok7pTeqWnqo0OtTeG2om+brge54mfagVX8oZWorQhdFcW+I0EVR3O9zMSQIguvzefq47+eOGSqZmuTNNSougBRFce/s7OyrnlN0JuKGzoU+UtsoPaxIHcfJi7o54A4oa3ee5+97iM1StwRdJzTSu69xnLxcnQCqpGt7TMXOpBMb+9S1ph7NNN7qsvcQ5koaUmE1ezJ2NjqI/UTRWpbGeHHF9/39w8Nv/2S7HTWgmrfGLrUV4jh5ZrsNTezu3vwsTdNj2+3ATNeaeiz19OB+5nleCCGuqmjMOkVR3Gt5ZdN0/FDU1l0y9SiEbrq9sytCCL+8aV81vu/vJ0nyWsexXaBLph6F1IeH3/5xd/fmT1UcS2e2XrFpTDhTMwDL5dkPVR1LCOErmEVpBOF9IihOGLFKbS04QohdlceLomhPShmrPGbJRx9t/UHHcYnQ+KvQtvwYRemxQltf+9zY1ILL2ov+3ueB1PaPpb6I1r5KKZMwDGeqjrfhbj6ys0ctqe0fxvIDRV2mizAMI9iwkLYLJyf53xU0yykwSj0KyoW0aZoeDZn6u3Hje1+pbJcLsNSWCYJgezqdfgEAy+oq8bY0zVmP+V5sjDW17fLD+k1bcZw8n82iO13eU+7yBACwvf3x1xpOSLtira5uI/WYhAZAIHVJkiSvoyi6ZbsdPbEmNZcfiFndKbgcWnePDc7Uayha8KqFNE2Pt7a2fougtGgDZ2osYJ4iK08qdV2hdAWWeo3t7Y+/tt2GTZRz3X1mS8YAlx/1oDlZ3ATik0kuPzBB6V7lKIr28jx/b7sdNVhLUJypmyGTrQGM3LvdBxMx5EzdFmrrAIUQPtKMbRzO1JdDKlsDnH8ZgyC4brsdKzhTYyOOk+e229CVIAi2Ma+GNwGmTI0tSwNA7+2+rKNpQUJXrGRqTFIDIBUbCJYhSE4cufzACsXtvoQQ/lgvznCmbkmHDWSw4ezSuBWcqfvi+/4+xYw9n6ePbLfBNCx1B1bPavEQ7rfRyGJx+nNLH23tPITLj56o3MnJAC5vlcDlhyp2d29+BgAehSuPY1tgwFIPhMIDh46Pv/uZ7TaYhKVWwOphRZ6U8qntttThefAD220wCUtdQ5qmR3BeEy673CQUhuEvAMDLsuwhprJE9f6A2MEmtfUrd0mSvKquURRC+HGcvOhyjOl0+mUQBNeLorhP6d5sV+B9Py7S1NdB7Yrj5NlsFn065Bh9sXTnHs9+YGfoDMJqcxq0dbdieINIChwff6fkIkZZd8/n6WNMdbdLYCw/APDer6C8XVmWPVjtpacNC+UHZ2oqqHrIUZXVPc+ezucjnp6evtN17Bqsn+yz1B14+/btb3Qdu7xCmed5ofrYp6eLf6o+JmbaSm17RgIFJp6CK4S4qlpsIcQ3Ko+HHX7k3EUu7WefbXZ1tKMjpmKJYuqXy4+OmJprVlVj6yhnsINZausnHE2YWK29qrEHc3R0/BcVx6EEP5v8Iq36WBTF/dWiAW0o2lbYxdIDgMsP9bx79+53ttuwCYfvO7n0i4pdarQlCIVNYwzuhopqnLBLjZrZLPpU56oSIYTo+16Hs/RGutbUAHa+lSZr687901hfD4k16pgNYGO/OFMrwPf9J6ovoQ8pbQwvL0NVegDQydQABM7iVWXsIRvnGH6yAMpf7T6Zmi+ZN+D7/pOhW33N5+mjvkKnaXqM9FEZqmjlXp9MDeB2th7cNyllEobhrMf74tVDijpjYUNIlFkaoH9NjfK+DCyUT89KkuTVpm2/pJQH5ULfvkJLKRMEO5yioW+mBnA3W2vp13q9rWqHpzhOXs5m0e2hx+kI2iwNQHP2g0S2Xqcoiu9X/z47O9sZeswsyx6OROhObA14rwf2OrgECyVQuaZQnGPt6QJJkjyPoujOdDq11QTTdBpripnaClLKp0EQXA+C4LoQ4qqNPT0ODw//BQBeFBm5n7sO9FkaYLjUWBfI9qbu4UVSyqerVeAf8H1/fzV95sVx8lJHWwAATk5O3r9582YfALzd3d09XZ/TAjLnUEPKDwwoL0Nms+hOHCfPJhPxIwCA5RJ+H4bh5xvecxvgfCZjsVjcGbrsS0p56Hnen2/cuHF3MpnAZDIZcjgVkMjQJUNmP6rY7jS6C0JFUdw7Ojr6yenp4hbAh81sPpBl2YNyN9IrV67Mp9Pp36bTa7afptUEmSwN4I7UAAjFdgSbY9trTFWdKLJQbkJOaAC3Zj8w/Fq4BNl4qpQaQ7YmOxDIsB3HQS6pztQsNn3Ix8+l8qPKEhwYHAtgiNngxKhDagzZugTDIFEBQ6yUuKMrU7PYdHDuV83V8mMdpwZNIZjioiwR6pQaU7YGcDAjDQRTLJS6ojtTYxMbANdg2gDbl1u5IybKD6xiYxpYE4ymz2OpqZsYy0Bj7aOWhGdKaozZuoqrcmPulzYnTGZq7GID4JagC9j7odUF0+UHBbEB8EvRBIV2a3fAxsoXmwt2u1K2E/OXkUosAQzF0dZyLkpiA/x/WzEITil2xrG5RpGa2CXrbSaxFRoCjCUD6gtvMaDysc8uyFuH0V8321JTzdZtcblvbTFermG4+OIBjjqVUY+VccUgdQmL7RbWxhOT1AAstgtY/+XFJjUAi00ZFGOHUWoAJMFhOoFmzLBKDYAoSMxGUI2V7Sm9TZTB4qkxnKCSuQRzpq6CMngjB+2YUJEaAHEQRwjqscBefqzD5YhdUMtcQilTVyERXMcgE3NqmboKZ20zkJG5hGqmrmL9CpbDkIyrC1KXkBwApJBOFJTLjzq4JBkGWZGruCZ1CcvdDSdkLnFV6pLqYLHgF3FK5hLXpa7C2fscJ0WuMiapS8aavZ2XuWSMUldxXfDRiFxl7FJXcUHwUUq8Dktdz7ocWCVniWtgqdvRJI8p2VneDrDUw2DZEOLSZXKGAQCWmnEQlppxDpaacQ6WmnEOlppxDpaacQ6WmnEOlppxjv8CXvZQilxNeIsAAAAASUVORK5CYII="/></svg>
                            </div>
                        </a>
                        <!-- END LOGO -->
                    </li>
                </ul>
            </div>
            <nav class="main-menu">
                <ul class="nav metismenu">
                    <li class="nav-dropdown {{ Request::is('home') ? 'active' : '' }}">
                        <a class="has-arrow" href="{{ route('home') }}" aria-expanded="true">
                            <i class="icon dripicons-meter"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-dropdown {{ Request::is('detail-project') ? 'active' : '' }}">
                        <a class="has-arrow" href="{{ route('DetailProject') }}" aria-expanded="false">
                            <i class="fas fa-info-circle"></i>
                            <span>Detail Project</span>
                        </a>
                    </li>
                    <li class="nav-dropdown {{ Request::is('UploadProject') ? 'active' : '' }}">
                        <a class="has-arrow" href="{{ route('UploadProject') }}" aria-expanded="false">
                            <i class="fas fa-upload"></i>
                            <span>Upload Project</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR WRAPPER -->
    <div class="content-wrapper">
        <!-- START LOGO WRAPPER -->
        <nav class="top-toolbar navbar navbar-mobile navbar-tablet">
            <ul class="navbar-nav nav-left">
                <li class="nav-item">
                    <a href="javascript:void(0)" data-toggle-state="aside-left-open">
                        <i class="icon dripicons-align-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav nav-center site-logo">
                <li>
                    <a href="index.html">
                        <div class="logo_mobile">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 181 181"><title>20842042_115148189104653_7971321953798217301_n</title><image width="181" height="181" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALUAAAC1CAYAAAAZU76pAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDAgNzkuMTYwNDUxLCAyMDE3LzA1LzA2LTAxOjA4OjIxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTgtMDctMjJUMTM6MDA6MzArMDc6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE4LTA3LTI3VDE5OjU5OjIxKzA3OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE4LTA3LTI3VDE5OjU5OjIxKzA3OjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhmMmZjMjM0LWM5NzEtNDU3Yy1iYmYwLTUwMTkyMmNkZWY2MSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDphY2QwNWNhNy1iOGE3LTQ1MTAtOTRmZC1kYzAyNjE1YzkxM2EiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphY2QwNWNhNy1iOGE3LTQ1MTAtOTRmZC1kYzAyNjE1YzkxM2EiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmFjZDA1Y2E3LWI4YTctNDUxMC05NGZkLWRjMDI2MTVjOTEzYSIgc3RFdnQ6d2hlbj0iMjAxOC0wNy0yMlQxMzowMDozMCswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjhmMmZjMjM0LWM5NzEtNDU3Yy1iYmYwLTUwMTkyMmNkZWY2MSIgc3RFdnQ6d2hlbj0iMjAxOC0wNy0yN1QxOTo1OToyMSswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+P9QCjgAADIhJREFUeJztnb2T3EgVwJ98K/d4bq3F8mqqKJJ1Sp2LiOgcEnH8B5iycwi4zM5IqLvMDsiOwFtr/oODKgoy7Ogiyk4gsYkopL22R7snr6ydHYIdGTEr7eijP95rvV+2WzOa7te/efPUUre85XIJDOMSV2w3gGFUw1IzzsFSM87BUjPOwVIzzrFluwGOoGsKydN0XKdhqbthev6z6fNY9ktgqZvBPIFf1zYWfQVL/T8wS9yG9faPVnKWmr7MTVT7NSrBxyq1qyI3UfZ3FHKPSeqx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"/></svg>
                        </div>
                        <span class="brand-text">Suttikan</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav nav-right">
                <li class="nav-item">
                    <a href="javascript:void(0)" data-toggle-state="mobile-topbar-toggle">
                        <i class="icon dripicons-dots-3 rotate-90"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END LOGO WRAPPER -->
        <!-- START TOP TOOLBAR WRAPPER -->
        <nav class="top-toolbar navbar navbar-desktop flex-nowrap">
            <!-- START RIGHT TOOLBAR ICON MENUS -->
            <ul class="navbar-nav nav-right">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="open-search-button" data-q-action="open-site-search" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon dripicons-search"></i>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-menu-lg">
                    <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon dripicons-view-apps"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-0">
                        <div class="dropdown-menu-grid">
                            <div class="menu-grid-row">
                                <div><a class="dropdown-item  border-bottom border-right" href="{{ route('home') }}"><i class="icon dripicons-meter"></i><span>Dashboard</span></a></div>
                                <div><a class="dropdown-item  border-bottom" href="{{ route('DetailProject') }}"><i class="fas fa-info-circle"></i><span style="margin-top: 16px;">Detail Project</span></a></div>
                            </div>
                            <div class="menu-grid-row">
                                <div><a class="dropdown-item  border-right" href="{{ route('UploadProject') }}"><i class="fas fa-upload"></i><span>Upload Project</span></a></div>
                                <div> <a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i><span>...</span></a></div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('/images/suttikanPIC/profile/Profile-5.png') }}" class="w-35 rounded-circle" alt="Admin Profile" style="height: 35px;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                        <div class="dropdown-header pb-3">
                            <div class="media d-user">
                                <img class="align-self-center mr-3 w-40 rounded-circle" src="{{ asset('/images/suttikanPIC/profile/Profile-5.png') }}" style="height: 35px;" alt="Admin Profile">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">Admin Profile</h5>
                                    <span>sec_eng@suttikan.co.th</span>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#">...</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon dripicons-lock-open"></i> Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!-- END RIGHT TOOLBAR ICON MENUS -->
            <!--START TOP TOOLBAR SEARCH -->
            <div role="search" class="navbar-form">
                <div class="form-group">
                    <input type="text" placeholder="ใส่คำที่ค้นหาตรงนี้ครับ ..." class="form-control filter-input navbar-search" data-search-trigger="open" autocomplete="off">
                    <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>

                    <div class="dropdown-menu menu-icons dropdown-menu-left" style="top: 60px;display: block;width: 100%;margin-top: 10px;transition: all .3s ease;">
                        <div class="form-group form-filter">
                            <i data-q-action="clear-filter" class="icon dripicons-cross clear-filter"></i>
                            <ul class="list-reset filter-list" data-scroll="minimal-dark">
                                <li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('UploadProject') }}">เพิ่มโครงการ</a></li>
                                <li><a class="dropdown-item" href="{{ route('UploadProject') }}">Add project</a></li>
                                <li><a class="dropdown-item" href="{{ route('DetailProject') }}">Detail Project</a></li>
                                <li><a class="dropdown-item" href="{{ route('DetailProject') }}">รายละเอียดโครงการ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button type="submit" class="d-none">Submit</button>
            </div>
            <!--END TOP TOOLBAR SEARCH -->
        </nav>
        <!-- END TOP TOOLBAR WRAPPER -->
        <div class="content">
            <!--START PAGE HEADER -->
            <header class="page-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h1>Dashboard</h1>
                    </div>
                    <ul class="actions top-right">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                                <div class="dropdown-header">
                                    ทางลัด
                                </div>
                                <a href="#" class="dropdown-item" onclick="reload()">
                                    <i class="icon dripicons-clockwise"></i> รีหน้าเว็บอีกรอบ
                                    <script>
                                        function reload(){
                                            location.reload();
                                        }
                                    </script>
                                </a>
                                <a href="https://www.facebook.com/meenkc" class="dropdown-item">
                                    <i class="icon dripicons-help"></i> ฝ่ายสนับสนุนทางหน้าเว็บ
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <!--END PAGE HEADER -->
            <!-- zone content page -->
            @yield('content')
            <!-- End zone content -->
        </div>

    </div>
</div>
<!-- END CONTENT WRAPPER -->

    <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
    <script src="{{ asset('admin_dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/vendor/js-storage/js.storage.js') }}"></script>
    <script src="{{ asset('admin_dashboard/vendor/js-cookie/src/js.cookie.js') }}"></script>
    <script src="{{ asset('admin_dashboard/vendor/pace/pace.js') }}"></script>
    <script src="{{ asset('admin_dashboard/vendor/metismenu/dist/metisMenu.js') }}"></script>
    <script src="{{ asset('admin_dashboard/vendor/switchery-npm/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>

    <!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>--}}
    {{--<script src="{{ asset('admin_dashboard/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>--}}
    {{--<script src="{{ asset('admin_dashboard/vendor/flot/jquery.flot.js') }}"></script>--}}
    {{--<script src="{{ asset('admin_dashboard/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>--}}
    {{--<script src="{{ asset('admin_dashboard/vendor/flot/jquery.flot.resize.js') }}"></script>--}}
    {{--<script src="{{ asset('admin_dashboard/vendor/flot/jquery.flot.time.js') }}"></script>--}}
{{--    <script src="{{ asset('admin_dashboard/vendor/flot.curvedlines/curvedLines.js') }}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- ================== GLOBAL APP SCRIPTS ==================-->
    <script src="{{ asset('admin_dashboard/js/global/app.js') }}"></script>
    <!-- ================== PAGE LEVEL SCRIPTS ==================-->
    <script src="{{ asset('admin_dashboard/js/components/countUp-init.js') }}"></script>
    <script src="{{ asset('admin_dashboard/js/cards/counter-group.js') }}"></script>
    <script src="{{ asset('admin_dashboard/js/cards/recent-transactions.js') }}"></script>
{{--    <script src="{{ asset('admin_dashboard/js/cards/monthly-budget.js') }}"></script>--}}
    <script src="{{ asset('admin_dashboard/js/cards/users-chart.js') }}"></script>
    <script src="{{ asset('admin_dashboard/js/cards/bounce-rate-chart.js') }}"></script>
    <script src="{{ asset('admin_dashboard/js/cards/session-duration-chart.js') }}"></script>

</body>
</html>

