@section('title')
Detail Pasien Pegawai
@endsection
@extends('layout/v_template3')
@section('page')
Detail Pasien Pegawai
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA PASIEN PEGAWAI</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Pasien Pegawai</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Pasien Pegawai</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Pasien : </label>
          {{$pasien->id_pasien}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Pasien : </label>
          {{$pasien->nama_pasien}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Departement : </label>
          {{$pasien->departement}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Keluhan : </label>
          {{$pasien->keluhan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Diagnosa : </label>
          {{$pasien->diagnosa}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Obat : </label>
          {{$pasien->obat}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/kelola_pasien"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

