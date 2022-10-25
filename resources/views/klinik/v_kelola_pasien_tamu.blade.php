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
          <th>Status</th>
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
            <td>{{$data->status}}</td>
            <td>{{$data->hasil_swab}}</td>
            </td>
            <td>
              <a href="/tamu/detail/{{$data->id_tamu}}" class="btn btn-sm btn-success">Detail</a>
              <a href="/pasien_tamu/edit/{{$data->id_tamu}}" class="btn btn-sm btn-warning">Edit</a>
              <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_tamu}}">
                  Delete
              </button> -->
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
          <th>Status</th>
          <th>Hasil Swab</th>
        </tr>
        </tfoot>
      </table>
      @foreach ($tamu as $data)
      <div class="modal fade" id="delete{{$data->id_tamu}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_tamu}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/tamu/delete/{{$data->id_tamu}}" class="btn btn-outline-light">Yes</a>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
@endsection

