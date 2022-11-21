@section('title')
Laporan Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Security
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA SECURITY
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
                                        <th>ID security</th>
                                        <th>Nama security</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Bagian</th>
                                        <th>Foto Security</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Security</th>
                                        <th>Nama Security</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Bagian</th>
                                        <th>Foto Security</th>
                                           
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
                                    <td><img src="{{url('foto_security/'.$data->foto_security)}}" width="100px"></td>
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