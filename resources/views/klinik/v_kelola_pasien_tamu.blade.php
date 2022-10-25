@section('title')
Kelola Data Pasien Tamu
@endsection
@extends('layout/v_template_pasien')
@section('page')
Kelola Data Pasien Tamu
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pasien Tamu</h3>
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
            <!-- <a href="/tamu/add" class="btn btn-sm btn-primary">Add Data</a><br> -->
            <br>
        </div>
        <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>ID Tamu</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Keperluan</th>
          <th>Bertemu Dengan</th>
          <th>No KTP</th>
          <th>Foto KTP</th>
          <th>Nomor Kendaraan</th>
          <th>Jam Masuk</th>
          <th>Hasil Swab</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1;?>
        @foreach ($tamu as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->tanggal}}</td>
            <td>{{$data->id_tamu}}</td>
            <td>{{$data->nama_tamu}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->pekerjaan}}</td>
            <td>{{$data->keperluan}}</td>
            <td>{{$data->bertemu_dengan}}</td>
            <td>{{$data->no_ktp}}</td>
            <td><img src="{{url('foto_ktp/'.$data->foto_ktp)}}" width="100px">
            <td>{{$data->no_kendaraan}}</td>
            <td>{{$data->jam_masuk}}</td>
            <td>{{$data->hasil_swab}}</td>
            </td>
            <td>
              <a href="/tamu/detail/{{$data->id_tamu}}" class="btn btn-sm btn-success">Detail</a>
              <a href="/pasien_tamu/edit/{{$data->id_tamu}}" class="btn btn-sm btn-warning">Edit</a>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>ID Tamu</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Keperluan</th>
          <th>Bertemu Dengan</th>
          <th>No KTP</th>
          <th>Foto KTP</th>
          <th>Nomor Kendaraan</th>
          <th>Jam Masuk</th>
          <th>Hasil Swab</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
     

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
@endsection

