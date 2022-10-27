@section('title')
Kelola Obat
@endsection

@extends('layout/v_template_pasien')
@section('page')
Kelola Obat
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
            <a href="/obat/add" class="btn btn-sm btn-primary">Add Data</a><br>
            <br>
        </div>
        <thead>
        <tr>
          <th>No</th>
          <th>ID Obat</th>
          <th>Nama Obat</th>
          <th>Jenis Obat</th>
          <th>Satuan</th>
          <th>Jumlah</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
         @foreach ($obats as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->id_obat}}</td>
            <td>{{$data->nama_obat}}</td>
            <td>{{$data->jenis_obat}}</td>
            <td>{{$data->satuan}}</td>
            <td>{{$data->jumlah}}</td>
            </td>
            <td>
              <a href="/obat/detail/{{$data->id_obat}}" class="btn btn-sm btn-success">Detail</a>
              <a href="/obat/edit/{{$data->id_obat}}" class="btn btn-sm btn-warning">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_obat}}">
                  Delete
              </button>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>ID Obat</th>
          <th>Nama Obat</th>
          <th>Jenis Obat</th>
          <th>Satuan</th>
          <th>Jumlah</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
      @foreach ($obats as $data)
      <div class="modal fade" id="delete{{$data->id_obat}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_obat}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/obat/delete/{{$data->id_obat}}" class="btn btn-outline-light">Yes</a>
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

