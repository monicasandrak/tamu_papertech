@section('title')
Pasien
@endsection
@extends('layout/v_template2')
@section('page')
Halaman Detail Pasien
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

