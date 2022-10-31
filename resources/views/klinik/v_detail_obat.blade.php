@section('title')
Obat
@endsection
@extends('layout/v_template_pasien')
@section('page')
Halaman Detail Obat
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
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
          {{$obats->jumlah}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/kelola_obat"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

