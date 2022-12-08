@section('title')
Laporan Data Kendaraan
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Kendaraan
@endsection
@section('content')

<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA KENDARAAN
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        
                        <div class="body">
                        
                       
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Pengendara</th>
                                        <th>Nama Pengendara</th>
                                        <th>Posisi</th>
                                        <th>Departement</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Pemeriksa Kendaraan</th>
                                        <th>Status Pajak</th>
                                        <th>Status SIM</th>
                                        <th>Status Akhir</th>
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Pengendara</th>
                                        <th>Nama Pengendara</th>
                                        <th>Posisi</th>
                                        <th>Departement</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Pemeriksa Kendaraan</th>
                                        <th>Status Pajak</th>
                                        <th>Status SIM</th>
                                        <th>Status Akhir</th>
                                        
                                           
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
                                    <td>{{$data->jenis_kendaraan}}</td>
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
                                    </tr>
                                    @endforeach
                                   
                                    </tbody>
                                </table>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
@endsection