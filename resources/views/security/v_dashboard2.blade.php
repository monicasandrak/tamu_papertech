@section('title')
Dashboard
@endsection
@extends('layout/v_template3')
@section('page')
Dashboard
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            @if (auth()->user()->level == "security")
            <div class="card">
            <div class="header">
            <h4 class="card-title">Selamat Datang di Halaman Security</h4>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TAMU/VISITOR</div>
                            <span>Jumlah Tamu : {{$tamu}}</span>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SECURITY</div>
                            <span>Jumlah Security : {{$security}}</span>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                
                @endif

                @if (auth()->user()->level == "admin")
                <div class="card">
                <div class="header">
                <h4 class="card-title">Selamat Datang di Halaman Admin</h4>
                <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">USER</div>
                            <span>Jumlah User : {{$user}}</span>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
                </div>
                </div>
                @endif
            </div>
            </div>
        </div>
    </section>