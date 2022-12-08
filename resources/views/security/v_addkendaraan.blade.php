@section('title')
Tambah Data Kendaraan
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Kendaraan
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA KENDARAAN</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_kendaraan"><i class="material-icons">group</i> Kelola Kendaraan</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Kendaraan</li>
                            </ol>
                            
                        </div>
                        <div class="body">
                            <form action="{{route('insert_kendaraan')}}" method="POST" enctype="multipart/form-data">
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
                                    <label>ID Pengendara</label>
                                        <input type="text" class="form-control" name="id_pengendara" id="exampleInputEmail1" placeholder="ID Pengendara"  value="{{ $id_baru }}" readonly>
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
                                    <label>Nama Pengendara</label>
                                        <input type="text" class="form-control" name="nama_pengendara" placeholder="Masukan Nama Pengendara" value="{{ old('nama_pengendara')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_tamu')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <label for="exampleInputEmail1">Posisi</label>
                                    <select name="posisi" class="form-control show-tick">
                                        <option disabled selected>--- Pilih ---</option>
                                            @foreach ($dropdown as $row)
                                                <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                            @endforeach
                                    </select>
                                </div>
                            
                                <div class="form-group form-float">
                                <label for="exampleInputEmail1">Departement</label>
                                    <select name="departement" class="form-control show-tick">
                                    <option disabled selected>--- Pilih ---</option>
                                        @foreach ($dropdown2 as $row)
                                            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label for="exampleInputEmail1">Jenis Kendaraan</label>
                                        <select name="jenis_kendaraan" class="form-control show-tick">
                                        <option disabled selected>--- Pilih ---</option>
                                            @foreach ($dropdown5 as $row)
                                                <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Nomor Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan" placeholder="Masukan Nomor Kendaraan" value="{{ old('no_kendaraan')}}" >
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                        <input type="hidden" class="form-control" name="pemeriksa_kendaraan" placeholder="Masukan Pemeriksa Kendaraan" value="{{Auth::user()->username}}" >
                                </div>
                                <div class="form-group form-float">
                                <label for="exampleInputEmail1">Tahun Pajak</label>
                                    <select name="tanggal_pajak" class="form-control show-tick">
                                    <option disabled selected>--- Pilih ---</option>
                                        @foreach ($dropdown4 as $row)
                                            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                        @endforeach
                                    </select>
                                </div>

                                

                                <div class="form-group form-float">
                                <label for="exampleInputEmail1">Status SIM</label>
                                    <select name="status_sim" class="form-control show-tick">
                                    <option disabled selected>--- Pilih ---</option>
                                        @foreach ($dropdown3 as $row)
                                            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                        @endforeach
                                    </select>
                                </div>

                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Status Akhir</label>
                                        <input type="text" class="form-control" name="status_akhir" placeholder="Masukan Status Akhir" value="{{ old('tanggal_pajak')}}" >
                                    </div>
                                </div> -->
                                
                            
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