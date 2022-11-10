@section('title')
dokter
@endsection
@extends('layout/v_template2')
@section('page')
Halaman Detail Dokter
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

