@section('title')
Detail Dokter
@endsection
@extends('layout/v_template3')
@section('page')
Detail Dokter
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA DOKTER</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Dokter</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Dokter</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Dokter : </label>
          {{$dokter->id_dokter}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Dokter : </label>
          {{$dokter->nama_dokter}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Tanggal Lahir : </label>
          {{$dokter->tanggal_lahir}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jenis Kelamin : </label>
          {{$dokter->jenis_kelamin}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Alamat : </label>
          {{$dokter->alamat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto Dokter : </label>
          <img src="{{url('foto_dokter/'.$dokter->foto_dokter)}}" width="200px">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Keahlian : </label>
          {{$dokter->keahlian}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jadwal Kerja : </label>
          {{$dokter->jk}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/kelola_dokter"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

