@section('title')
Tamu Masuk
@endsection
@extends('layout/v_template3')
@section('page')
Tamu Masuk
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMU MASUK</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/tamu_masuk"><i class="material-icons">group</i> Tamu</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Tamu Masuk</li>
                            </ol>
                            
                        </div>
                        <!-- <div class="body">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Tanggal</label>
                                        <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" value="{{ $tamu->tanggal }}" readonly>
                                    </div>
                                </div>
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID Tamu</label>
                                        <input type="text" class="form-control" name="id_tamu" id="exampleInputEmail1" value="{{ $tamu->id_tamu }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nama Tamu</label>
                                        <input type="text" class="form-control" name="nama_tamu" value="{{ $tamu->nama_tamu }}" readonly >
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{$tamu->alamat}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" value="{{ $tamu->pekerjaan }}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Keperluan</label>
                                        <input type="text" class="form-control" name="keperluan" value="{{$tamu->keperluan}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Bertemu Dengan</label>
                                        <input type="text" class="form-control" name="bertemu_dengan" value="{{$tamu->bertemu_dengan}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nomor KTP/Identitas</label>
                                        <input type="text" class="form-control" name="no_ktp" value="{{$tamu->no_ktp}}" readonly >
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                       <label>Foto KTP</label>
                                       <br> <br>
                                        <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="200px">
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nomor Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan" value="{{$tamu->no_kendaraan}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Jam Masuk</label>
                                        <input type="text" class="form-control" name="jam_masuk" value="{{$tamu->jam_masuk}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Pemeriksa Tamu</label>
                                        <input type="text" class="form-control" name="pemeriksa_tamu" value="{{$tamu->pemeriksa_tamu}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Status</label>
                                        <input type="text" class="form-control" name="status" value="{{$tamu->status}}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Hasil Swab</label>
                                        <input type="text" class="form-control" name="hasil_swab" value="{{$tamu->hasil_swab}}" readonly >
                                    </div>
                                </div>
                            
                        </div> -->

                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control"  value="{{ $tamu->tanggal }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">ID Tamu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->id_tamu }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nama Tamu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->nama_tamu }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->alamat }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Pekerjaan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->pekerjaan }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Keperluan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->keperluan }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Bertemu Dengan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->bertemu_dengan }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nomor KTP/Identitas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->no_ktp }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Foto KTP/Identitas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                                <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="200px">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nomor Kendaraan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->no_kendaraan }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Jam Masuk</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->jam_masuk }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Pemeriksa Tamu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->pemeriksa_tamu }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Status</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->status }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Test Swab</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->swab }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Hasil Swab</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $tamu->hasil_swab }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
           
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
           
            <!-- #END# Validation Stats -->
        </div>
    </section>