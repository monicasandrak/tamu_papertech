@section('title')
Dashboard
@endsection
@extends('layout/v_template3')
@section('page')
Dashboard
@endsection
@section('content')
<br>
<br>
<br>
@if (auth()->user()->level == "security")
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang di Halaman Security</h3>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Tamu </h2>
                                                <span>Jumlah Tamu : {{$tamu}}</span>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{ route('tamu') }}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        <!-- <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                           
                        
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Security</h2>
                                                <span>Jumlah Security : {{$security}}</span>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{ route('security') }}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     </div>
     <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            </div>
</div>
                            
                             
                            @endif
                            @if (auth()->user()->level == "klinik")
                            <h3>Selamat Datang di Halaman Pegawai Klinik</h3>
                            <div class="card">
                            <div class="card-header">
                            <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <h2>Pasien Tamu</h2>
                                                    <span>Jumlah Pasien Tamu : {{$pasien_tamu}}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{route ('pasien_tamu')}}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <h2>Pasien Pegawai</h2>
                                                    <span>Jumlah Pasien Pegawai : {{$pasien}}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{route ('pasien')}}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <h2>Obat</h2>
                                                    <span>Jumlah Obat : {{$obat}}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{route('obat')}}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <h2>Perawat</h2>
                                                    <span>Jumlah Perawat : {{$perawat}}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="#">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <h2>Dokter</h2>
                                                    <span>Jumlah Dokter :  {{$dokter}}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="#">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                @endif

                        @if (auth()->user()->level == "admin")
                        <div class="card">
                         <div class="card-header">
                        <h3 class="card-title">Selamat Datang di Halaman Admin</h3>
                        <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>User</h2>
                                                <span>Jumlah User : {{$user}}</span>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-dark stretched-link" href="{{ route('user') }}">View Details</a>
                                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                              
                    
                        @endif
                       
@endsection

