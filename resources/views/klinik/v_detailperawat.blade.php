@section('title')
perawat
@endsection
@extends('layout/v_template2')
@section('page')
Halaman Detail Perawat
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

