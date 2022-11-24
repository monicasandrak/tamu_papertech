@section('title')
Kelola Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Data Tamu
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
                                KELOLA TAMU
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
                        <!-- <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span> -->
                        <div align="right">
                                    <a href="/tamu/add" class="btn bg-teal waves-effect">
                                    <i class="material-icons">add_circle_outline</i>
                                    <span>ADD DATA</span>
                                    </a>
                                
                                </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>ID Tamu</th>
                                        <th>Nama Tamu</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Keperluan</th>
                                        <th>Bertemu Dengan</th>
                                        <th>Nomor KTP/Identitas</th>
                                        <th>Foto KTP</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Jam Masuk</th>
                                        <th>Status</th>
                                        <th>Test Swab</th>
                                        <th>Hasil Swab</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>ID Tamu</th>
                                        <th>Nama Tamu</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Keperluan</th>
                                        <th>Bertemu Dengan</th>
                                        <th>Nomor KTP/Identitas</th>
                                        <th>Foto KTP</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Jam Masuk</th>
                                        <th>Status</th>
                                        <th>Test Swab</th>
                                        <th>Hasil Swab</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($tamu as $data)  
        
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{date('Y-m-d', strtotime($data->tanggal))}}</td>
                                    <!-- <td>{{date('d F Y',strtotime($data->tanggal))}}</td> -->
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
                                    <td>
                                      @if ($data->status == "Disetujui")
                                      <h5><span class="badge badge-success">Disetujui<i class="fas fa-check"></i></span></h5>
                                      @endif
                                      @if ($data->status == "Tidak Disetujui")
                                      <h5><span class="badge badge-danger"> Tidak Disetujui<i class="fas fa-times"></i></span></h5>
                                      @endif
                                      @if ($data->status == "Belum Disetujui")
                                      <h5><span class="badge badge-warning"> Sedang Diproses<i class="fas fa-hourglass-half"></i></span></h5>
                                      @endif
                                    </td>
                                    <td>
                                      @if ($data->swab == "Wajib Swab")
                                      <h5><span class="badge badge-warning">Wajib Swab<i class="fas fa-times"></i></span></h5>
                                      @endif
                                      @if ($data->swab == "Tidak Swab")
                                      <h5><span class="badge badge-success">Tidak Swab<i class="fas fa-check"></i></span></h5>
                                      @endif
                                    </td>
                                    <td>
                                      @if ($data->hasil_swab == "Positif")
                                      <h5><span class="badge badge-danger">Positif<i class="fas fa-times"></i></span></h5>
                                      @endif
                                      @if ($data->hasil_swab == "Negatif")
                                      <h5><span class="badge badge-success">Negatif<i class="fas fa-check"></i></span></h5>
                                      @endif
                                      
                                    </td>
            
                                    <td>
                                        <a href="/tamu/detail/{{$data->id_tamu}}" class="text-success"><i class="material-icons">visibility</i></a>
                                        <a href="/tamu/edit/{{$data->id_tamu}}" class="text-primary"><i class="material-icons">edit</i></a>
                                        <a href="" data-target="#delete{{$data->id_tamu}}" class="text-danger" data-toggle="modal"  >
                                        <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            @foreach ($tamu as $data)
                            <div class="modal fade" id="delete{{$data->id_tamu}}">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h6 class="modal-title">{{$data->nama_tamu}}</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda ingin menghapus data ini?

                                  </p>
                                </div>

                              <div class="modal-footer  justify-content-between">
                                  
                                    <a href="/tamu/delete/{{$data->id_tamu}}" class="btn btn-outline-light"> Yes </a>
</button>
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