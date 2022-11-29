@section('title')
Tambah Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Security
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA SECURITY</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_security"><i class="material-icons">group</i> Kelola Security</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Security</li>
                            </ol>
                            
                        </div>
                        <div class="body">
                            <form action="{{route('insert_security')}}" method="POST" enctype="multipart/form-data">
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
                                    <label>ID Security</label>
                                        <input type="text" class="form-control" name="id_security" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Nama Security</label>
                                        <input type="text" class="form-control" name="nama_security" value="{{ old('nama_security')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('tanggal_lahir')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option disabled selected>--- Pilih ---</option>
                                            @foreach ($dropdown as $jk)
                                                <option value="{{$jk}}">{{Str::ucfirst($jk)}}</option> <!-- php ucfirst() -->
                                            @endforeach
                                    </select>
                                </div>
            
                                <div class="form-group form-float">
                                    <label for="exampleInputEmail1">Bagian</label>
                                    <select name="bagian" class="form-control show-tick">
                                        <option disabled selected>--- Pilih ---</option>
                                            @foreach ($dropdown2 as $bagian)
                                                <option value="{{$bagian}}">{{Str::ucfirst($bagian)}}</option> <!-- php ucfirst() -->
                                            @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group form-float">
                                <label class="form-label">Foto Security</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="foto_security" class="custom-file-input" id="exampleInputFile">
                                        <!-- <div class="text-danger">
                                            @error('foto_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span>
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