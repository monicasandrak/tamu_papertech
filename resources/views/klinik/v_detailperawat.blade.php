@section('title')
Detail Perawat
@endsection
@extends('layout/v_template3')
@section('page')
Detail Perawat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA PERAWAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Perawat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Perawat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Perawat : </label>
          {{$perawat->id_perawat}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Perawat : </label>
          {{$perawat->nama_perawat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Tanggal Lahir : </label>
          {{$perawat->tanggal_lahir}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jenis Kelamin : </label>
          {{$perawat->jenis_kelamin}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Alamat : </label>
          {{$perawat->alamat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto Perawat : </label>
          <img src="{{url('foto_perawat/'.$perawat->foto_perawat)}}" width="200px">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jadwal Kerja : </label>
          {{$perawat->jk}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/kelola_perawat"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

