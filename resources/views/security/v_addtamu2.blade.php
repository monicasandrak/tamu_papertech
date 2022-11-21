@section('title')
Tambah Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Tamu
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA TAMU</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_tamu"><i class="material-icons">group</i> Kelola Tamu</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Tamu</li>
                            </ol>
                            
                        </div>
                        <div class="body">
                            <form action="{{route('insert_tamu')}}" method="POST" enctype="multipart/form-data">
                            @csrf
            <div class="card-body">
            @if(session('success'))
        <p class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>ID Tamu</label>
                                        <input type="text" class="form-control" name="id_tamu" id="exampleInputEmail1" placeholder="ID Tamu"  value="{{ $id_baru }}" readonly>
                                        <!-- <label class="form-label">ID Tamu</label> -->
                                        <!-- <div class="text-danger">
                                            @error('id_tamu')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Nama Tamu</label>
                                        <input type="text" class="form-control" name="nama_tamu" placeholder="Masukan Nama Tamu" value="{{ old('nama_tamu')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_tamu')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="{{ old('alamat')}}" >
                                        
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
                                        <input type="text" class="form-control" name="pekerjaan" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('pekerjaan')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Keperluan</label>
                                        <input type="text" class="form-control" name="keperluan" placeholder="Masukan Keperluan" value="{{ old('keperluan')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('keperluan')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Bertemu Dengan</label>
                                        <input type="text" class="form-control" name="bertemu_dengan" placeholder="Masukan Bertemu Dengan" value="{{ old('bertemu_dengan')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('bertemu_dengan')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Nomor KTP/Identitas</label>
                                        <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomor KTP/Identitas" value="{{ old('no_ktp')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('no_ktp')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Foto KTP</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                        
                                            <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile">
                                            
                                
                                        <!-- <div class="text-danger">
                                            @error('foto_ktp')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Nomor Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan" placeholder="Masukan Nomor Kendaraan" value="{{ old('no_kendaraan')}}">
                                        
                                        <!-- <div class="text-danger">
                                            @error('no_kendaraan')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Jam Masuk</label>
                                        <input type="time" class="form-control" name="jam_masuk" placeholder="Masukan Jam Masuk" value="{{ old('jam_masuk')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('jam_masuk')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                <label for="exampleInputEmail1">Status</label>
                <select name="status" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <!-- <div class="text-danger">
                    @error('status')
                        {{ $message}}
                    @enderror
                </div> -->
            </div>
                                </div>
                            <br><br>
                            
                            <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span>
                                </button>
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