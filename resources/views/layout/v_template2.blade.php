<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('template2')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template2')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template2')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/{{asset('template2')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template2')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template2')}}/css/theme.css" rel="stylesheet" media="all">
     <!-- Link CSS public/css-->
	<!-- <link rel="stylesheet" href="{{asset('styles.css')}}">  -->
		 <!-- Link javascript public/scripts.js-->
<!-- <script type="text/javascript" src="{{asset('scripts.js')}}"></script>  -->
						 <!-- Link javascript public/datatables-simple-demo.js-->
<!-- <script type="text/javascript" src="{{asset('datatables-simple-demo.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  -->

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('template2')}}/images/icon/logo_papertech.png" alt="PT.Papertech" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- END HEADER MOBILE-->
         

        <!-- MENU SIDEBAR-->
        @include('layout/v_nav')
        <!-- END MENU SIDEBAR-->
       
        <!-- PAGE CONTAINER-->
        <div class="page-container">
        @yield('content')
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <!-- <form class="form-header" action="" method="POST"> -->
                                <!-- <input class="au-input au-input--xl" id="datatablesSimple" type="text"  placeholder="Search for datas &amp; reports..." /> -->
                                <table class="table table-bordered" id="datatablesSimple">
                                </table>
                                <!-- class="table table-bordered" id="datatablesSimple" -->
                                <!-- <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            <!-- </form> -->
                            <!-- <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                
                                </div> -->
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('template2')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                        @if(Auth::user()->level == 'security')
                                                    <a class="username">{{Auth::user()->username}}</a>
                                                @endif
                                                @if(Auth::user()->level == 'klinik')
                                                    <a class="username">{{Auth::user()->username}}</a>
                                                @endif
                                                @if(Auth::user()->level == 'admin')
                                                    <a class="js-acc-btn">{{Auth::user()->username}}</a>
                                                @endif  
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('template2')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                @if(Auth::user()->level == 'security')
                                                    <span class="username">{{Auth::user()->username}}</span>
                                                @endif
                                                @if(Auth::user()->level == 'klinik')
                                                    <span class="username">{{Auth::user()->username}}</span>
                                                @endif
                                                @if(Auth::user()->level == 'admin')
                                                    <span class="username">{{Auth::user()->username}}</span>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('account')}}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('password')}}">
                                                        <i class="zmdi zmdi-key"></i>Change Password</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{route('logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            {{-- <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                            
                            
                            
                            
                        
                    
                        
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Rissa and Monica 2022. All rights reserved. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('template2')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template2')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('template2')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template2')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('template2')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('template2')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('template2')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('template2')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('template2')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('template2')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('template2')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('template2')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('template2')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template2')}}/js/main.js"></script>

</body>

</html>
<!-- end document-->
