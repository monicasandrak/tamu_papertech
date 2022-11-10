@section('title')
Kelola Data Dokter
@endsection
@extends('layout/v_template')
@section('page')
Kelola Data Dokter
@endsection
@section('content')

<script type="text/javascript" src="{{asset('scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables-simple-demo.js')}}"></script>

<br>
<br>
<br>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Kelola Data Dokter</h3>
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
            <a href="/dokter/add" class="btn btn-sm btn-primary">Add Data</a><br>
            <br>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="datatablesSimple">
        <thead>
        <tr>
          <th>No</th>
          <th>ID Dokter</th>
          <th>Nama Lengkap</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Foto Dokter</th>
          <th>Keahlian</th>
          <th>Jadwal Kerja</th>
          <th>Action</th>
        </tr>
      </thead>
        <tbody>
        <?php $no=1;?>
        @foreach ($dokter as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->id_dokter}}</td>
            <td>{{$data->nama_dokter}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->keahlian}}</td>
            <td>{{$data->jk}}</td>
            <td><img src="{{url('foto_dokter/'.$data->foto_dokter)}}" width="100px">
            <td>
              <a href="/dokter/detail/{{$data->id_dokter}}" class="text-success"><i class="fas fa-eye">&#xE254;</i></a>
              <a href="/dokter/edit/{{$data->id_dokter}}" class="text-primary"><i class="fas fa-edit">&#xE254;</i></a>
              <button type="button" data-toggle="modal" data-target="#delete{{$data->id_dokter}}" class="text-danger">
              <i class="fa fa-trash">&#xE872;</i>
              </button>
          </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
       
      @foreach ($dokter as $data)
      <div class="modal fade" id="delete{{$data->id_dokter}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_dokter}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/dokter/delete/{{$data->id_dokter}}" class="btn btn-outline-light">Yes</a>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

      
      </div>
      

    </div>
    <!-- /.card-body -->
  <!-- </div>
  <!-- /.card -->
  
</div>
  @endsection

