@section('title')
Detail Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Detail Data Security
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA SECURITY</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_security"><i class="material-icons">group</i> Kelola Security</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Security</li>
                            </ol>
                            
                        </div>
                        <div class="body">
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID Security</label>
                                        <input type="text" class="form-control" name="id_security" id="exampleInputEmail1" value="{{ $security->id_security }}" readonly>
                                        
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
                                        <input type="text" class="form-control" name="nama_security" value="{{ $security->nama_security }}" readonly >
                                        
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
                                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $security->tanggal_lahir }}" readonly >
                                        
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
                                        <input type="text" class="form-control" name="alamat" value="{{$security->alamat}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jk" value="{{$security->jk}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Bagian</label>
                                        <input type="text" class="form-control" name="bagian" value="{{$security->bagian}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                               
                                
                                <div class="form-group form-float">
                                    <!-- <div class="form-line"> -->
                                       <label>Foto Security</label>
                                       <br> <br>
                                        <img src="{{url('foto_security/'.$security->foto_security)}}" width="200px">
                                        
                                       
                                        <!-- <div class="text-danger">
                                            @error('alamat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                <!-- </div> -->
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