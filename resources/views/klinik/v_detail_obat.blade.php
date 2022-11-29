@section('title')
Detail Obat
@endsection
@extends('layout/v_template3')
@section('page')
Detail Obat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA OBAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Obat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Obat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Obat : </label>
          {{$obats->id_obat}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Obat : </label>
          {{$obats->nama_obat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Bentuk Sediaan : </label>
          {{$obats->satuan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Kegunaan Obat : </label>
          {{$obats->jenis_obat}}
        </div>
        
        <div class="form-group">
          <label for="exampleInputFile">Stok : </label>
          {{$obats->stok}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/kelola_obat"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

