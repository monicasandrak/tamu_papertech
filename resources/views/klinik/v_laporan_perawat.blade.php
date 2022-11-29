@section('title')
Laporan Data Obat
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Obat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA OBAT
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
                                        <th>ID Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Jenis Obat</th>
                                        <th>Satuan</th>
                                        <th>Stok</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jenis Obat</th>
                                            <th>Satuan</th>
                                            <th>Stok</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($obats as $data)  
        
                                    <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->id_obat}}</td>
                                    <td>{{$data->nama_obat}}</td>
                                    <td>{{$data->jenis_obat}}</td>
                                    <td>{{$data->satuan}}</td>
                                    <td>{{$data->stok}}</td>
    
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