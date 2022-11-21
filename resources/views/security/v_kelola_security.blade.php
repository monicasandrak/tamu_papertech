@section('title')
Kelola Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Data Security
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
                                KELOLA SECURITY
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
                                    <a href="/security/add" class="btn bg-teal waves-effect">
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
                                        <th>ID Security</th>
                                        <th>Nama Security</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Bagian</th>
                                        <th>Foto Security</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>ID security</th>
                                        <th>Nama security</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Bagian</th>
                                        <th>Foto Security</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($security as $data)  
        
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->id_security}}</td>
                                    <td>{{$data->nama_security}}</td>
                                    <td>{{$data->tanggal_lahir}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>{{$data->jk}}</td>
                                    <td>{{$data->bagian}}</td>
                                    <td><img src="{{url('foto_security/'.$data->foto_security)}}" width="100px">
                                    <td>
                                        <a href="/security/detail/{{$data->id_security}}" class="text-success"><i class="material-icons">visibility</i></a>
                                        <a href="/security/edit/{{$data->id_security}}" class="text-primary"><i class="material-icons">edit</i></a>
                                        <a href="" type="button" data-toggle="modal" data-target="#delete{{$data->id_security}}" class="text-danger">
                                        <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            @foreach ($security as $data)
                            <div class="modal fade" id="delete{{$data->id_security}}">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content bg-danger">
                                  <div class="modal-header">
                                    <h6 class="modal-title">{{$data->nama_security}}</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda ingin menghapus data ini?</p>
                                </div>
                              <div class="modal-footer justify-content-between">
                                  <a href="/security/delete/{{$data->id_security}}" class="btn btn-outline-light">Yes</a>
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