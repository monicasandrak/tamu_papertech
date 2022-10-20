@section('title')
Kelola Data Tamu
@endsection
@include('layout/v_nav')
@extends('layout/v_template_table')
@section('page')
Kelola Data Tamu
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('pesan') }}
        </div>
        @endif
        <div align="right">
            <a href="/dosen/add" class="btn btn-sm btn-primary">Add Data</a><br>
        </div>
        <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>ID Tamu</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Keperluan</th>
          <th>Bertemu Dengan</th>
          <th>No KTP</th>
          <th>Foto KTP</th>
          <th>Nomor Kendaraan</th>
          <th>Jam Masuk</th>
        </tr>
        </thead>
        <tbody>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
@endsection

html` `
