@section('title')
Detail Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Detail Data Tamu
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA PASIEN TAMU</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Pasien Tamu</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Pasien Tamu</li>
                            </ol>
                            
                        </div>
                        <div class="body">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Tanggal</label>
                                        <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" value="{{ $tamu->tanggal }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID Tamu</label>
                                        <input type="text" class="form-control" name="id_tamu" id="exampleInputEmail1" value="{{ $tamu->id_tamu }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nama Tamu</label>
                                        <input type="text" class="form-control" name="nama_tamu" value="{{ $tamu->nama_tamu }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{$tamu->alamat}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" value="{{ $tamu->pekerjaan }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('tanggal_lahir')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Keperluan</label>
                                        <input type="text" class="form-control" name="keperluan" value="{{$tamu->keperluan}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Bertemu Dengan</label>
                                        <input type="text" class="form-control" name="bertemu_dengan" value="{{$tamu->bertemu_dengan}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nomor KTP/Identitas</label>
                                        <input type="text" class="form-control" name="no_ktp" value="{{$tamu->no_ktp}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                               
                                
                                <div class="form-group form-float">
                                    <!-- <div class="form-line"> -->
                                       <label>Foto KTP</label>
                                       <br> <br>
                                        <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="200px">
                                        
                                       
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                <!-- </div> -->
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nomor Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan" value="{{$tamu->no_kendaraan}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Jam Masuk</label>
                                        <input type="text" class="form-control" name="jam_masuk" value="{{$tamu->jam_masuk}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Status</label>
                                        <input type="text" class="form-control" name="status" value="{{$tamu->status}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Hasil Swab</label>
                                        <input type="text" class="form-control" name="hasil_swab" value="{{$tamu->hasil_swab}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                
                                
                            
                                <!-- <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span> -->
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