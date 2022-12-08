@section('title')
Kelola Kendaraan
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Kendaraan
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
                                KELOLA KENDARAAN
                            </h2>
                                <table id="example1" class="table table-bordered table-striped">
                                @if (session('pesan'))
                                  <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5><i class="icon fas fa-check"></i> Success</h5>
                                {{ session('pesan') }}
                                  </div>
                                @endif
                                </table>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div align="right">
                                    <a href="/kendaraan/add" class="btn bg-teal waves-effect">
                                    <i class="material-icons">add_circle_outline</i>
                                    <span>ADD DATA</span>
                                    </a>
                                <br>
                                </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Pengendara</th>
                                        <th>Nama Pengendara</th>
                                        <th>Posisi</th>
                                        <th>Departement</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Pemeriksa Kendaraan</th>
                                        <th>Status Pajak</th>
                                        <th>Status SIM</th>
                                        <th>Status Akhir</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Pengendara</th>
                                        <th>Nama Pengendara</th>
                                        <th>Posisi</th>
                                        <th>Departement</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Pemeriksa Kendaraan</th>
                                        <th>Status Pajak</th>
                                        <th>Status SIM</th>
                                        <th>Status Akhir</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($kendaraan as $data)  
        
        <tr>
          <td>{{$no++}}</td>
          <td>{{$data->id_pengendara}}</td>
          <td>{{$data->nama_pengendara}}</td>
          <td>{{$data->posisi}}</td>
          <td>{{$data->departement}}</td>
          <td>{{$data->no_kendaraan}}</td>
          <td>{{$data->pemeriksa_kendaraan}}</td>
          <td>
            @if ($data->tanggal_pajak <= 2022)
            <h5><span class="badge badge-danger">Tidak Aktif<i class="fas fa-times"></i></span></h5>
            @endif
            
            @if ($data->tanggal_pajak > 2022)
            <h5><span class="badge badge-success">Aktif<i class="fas fa-check"></i></span></h5>
            @endif
          </td>
          
          <td>
            @if ($data->status_sim == "Tidak Aktif")
            <h5><span class="badge badge-danger">Tidak Aktif<i class="fas fa-times"></i></span></h5>
            @endif
            @if ($data->status_sim == "Aktif")
            <h5><span class="badge badge-success">Aktif<i class="fas fa-check"></i></span></h5>
            @endif
            
          </td>
          <td>
            @if ($data->tanggal_pajak > 2022 && $data->status_sim == "Aktif")
            <h5><span class="badge badge-success">Success<i class="fas fa-check"></i></span></h5>
            @endif
            @if ($data->tanggal_pajak <= 2022 && $data->status_sim == "Aktif")
            <h5><span class="badge badge-danger"> Failed<i class="fas fa-times"></i></span></h5>
            @endif
            @if ($data->tanggal_pajak > 2022 && $data->status_sim == "Tidak Aktif")
            <h5><span class="badge badge-danger"> Failed<i class="fas fa-hourglass-half"></i></span></h5>
            @endif
            @if ($data->tanggal_pajak <= 2022 && $data->status_sim == "Tidak Aktif")
            <h5><span class="badge badge-danger"> Failed<i class="fas fa-hourglass-half"></i></span></h5>
            @endif
          </td>
                                    <td>
                                        <a href="/kendaraan/detail/{{$data->id_pengendara}}" class="text-success"><i class="material-icons">visibility</i></a>
                                        <a href="/kendaraan/edit/{{$data->id_pengendara}}" class="text-primary"><i class="material-icons">edit</i></a>
                                        <a href="" type="button" data-toggle="modal" data-target="#delete{{$data->id_pengendara}}" class="text-danger">
                                        <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            @foreach ($kendaraan as $data)
                            <div class="modal fade" id="delete{{$data->id_pengendara}}">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content bg-danger">
                                  <div class="modal-header">
                                    <h6 class="modal-title">{{$data->nama_pengendara}}</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda ingin menghapus data ini?</p>
                                </div>
                              <div class="modal-footer justify-content-between">
                                  <a href="/kendaraan/delete/{{$data->id_pengendara}}" class="btn btn-outline-light">Yes</a>
                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                              </div>
                            </div>
                            </div>
          <!-- /.modal-content -->
                            </div>
        <!-- /.modal-dialog -->
                            </div>
      @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            
            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection
