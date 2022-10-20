@section('title')
Kelola Data Tamu
@endsection
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
        <?php $no=1;?>
        <tr>
            <td>{{$no++}}</td>
            <td>{{18}}</td>
            <td>{{$data->nip}}</td>
            <td>{{$data->nama_dosen}}</td>
            <td>{{$data->mata_kuliah}}</td>
            <td><img src="{{url('foto_dosen/'.$data->foto_dosen)}}" width="100px">

            </td>
            <td>
                <a href="/dosen/detail/{{$data->id_dosen}}" class="btn btn-sm btn-success">Detail</a>
                <a href="/dosen/edit/{{$data->id_dosen}}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_dosen}}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Foto Dosen</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
      @foreach ($dosen as $data)
      <div class="modal fade" id="delete{{$data->id_dosen}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_dosen}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/dosen/delete/{{$data->id_dosen}}" class="btn btn-outline-light">Yes</a>
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

html` `
