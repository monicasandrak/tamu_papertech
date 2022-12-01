@section('title')
Detail Pasien
@endsection
@extends('layout/v_template3')
@section('page')
Detail Pasien
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA PASIEN</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien"><i class="material-icons">group</i> Kelola Pasien Pegawai</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Pasien</li>
                            </ol>
                            
                        </div>
                        <div class="body">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Tanggal</label>
                                        <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" value="{{ $pasien->tanggal }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID Pasien</label>
                                        <input type="text" class="form-control" name="id_pasien" id="exampleInputEmail1" value="{{ $pasien->id_pasien }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_pasien')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Nama Pasien</label>
                                        <input type="text" class="form-control" name="nama_pasien" value="{{ $pasien->nama_pasien }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_pasien')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jenis_kelamin" value="{{$pasien->jenis_kelamin}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('jenis_kelamin')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Umur</label>
                                        <input type="text" class="form-control" name="umur" value="{{ $pasien->umur }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('umur')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Departement</label>
                                        <input type="text" class="form-control" name="departement" value="{{$pasien->departement}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('departement')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Keluhan</label>
                                        <input type="text" class="form-control" name="keluhan" value="{{$pasien->keluhan}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('keluhan')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Diagnosa</label>
                                        <input type="text" class="form-control" name="diagnosa" value="{{$pasien->diagnosa}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('diagnosa')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                               
            
                             
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Pemeriksa</label>
                                        <input type="text" class="form-control" name="pemeriksa" value="{{$pasien->pemeriksa}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('pemeriksa]')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Dokter</label>
                                        <input type="text" class="form-control" name="dokter" value="{{$pasien->dokter}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('dokter')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Obat</label>
                                        <input type="text" class="form-control" name="obat" value="{{$pasien->obat}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('obat')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Jumlah Obat</label>
                                        <input type="text" class="form-control" name="jumlah" value="{{$pasien->jumlah}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('jumlah')
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