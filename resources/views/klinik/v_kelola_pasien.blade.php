@section('title')
Kelola Data Pasien Pegawai
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Data Pasien Pegawai
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KELOLA PASIEN PEGAWAI
                            </h2>
                            <table id="example1" class="table table-bordered table-striped">
                              @if (session('pesan'))
                                <div class="alert alert-success alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Success</h5>
                              {{ session('pesan') }}
                                </div>
                              @endif
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                      <div align="right">
                                  <a href="/pasien/add" class="btn btn-sm btn-primary">Add Data</a><br>
                              <br>
                              </div>
                              <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>ID Pasien</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Umur</th>
          <th>Departement</th>
          <th>Keluhan</th>
          <th>Diagnosa</th>
          <th>Pemeriksa</th>
          <th>Dokter</th>
          <th>Obat</th>
          <th>Jumlah Obat</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
         @foreach ($pasien as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->tanggal}}</td>
            <td>{{$data->id_pasien}}</td>
            <td>{{$data->nama_pasien}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->umur}}</td>
            <td>{{$data->departement}}</td>
            <td>{{$data->keluhan}}</td>
            <td>{{$data->diagnosa}}</td>
            <td>{{$data->pemeriksa}}</td>
            <td>{{$data->dokter}}</td>
            <td>{{$data->obat}}</td>
            <td>{{$data->jumlah}}</td>

            </td>
            <td>
              <a href="/pasien/detail/{{$data->id_pasien}}" class="text-success"> <i class="material-icons">visibility</i></a>
              <a href="/pasien/edit/{{$data->id_pasien}}" class="text-primary"> <i class="material-icons">mode_edit</i></a>
              <button type="button" data-toggle="modal" data-target="#delete{{$data->id_pasien}}" class="text-danger">
                <i class="material-icons">delete</i>
              </button>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>ID Pasien</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Umur</th>
          <th>Departement</th>
          <th>Keluhan</th>
          <th>Diagnosa</th>
          <th>Pemeriksa</th>
          <th>Dokter</th>
          <th>Obat</th>
          <th>Jumlah Obat</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
      @foreach ($pasien as $data)
      <div class="modal fade" id="delete{{$data->id_pasien}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_pasien}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/pasien/delete/{{$data->id_pasien}}" class="btn btn-outline-light">Yes</a>
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

