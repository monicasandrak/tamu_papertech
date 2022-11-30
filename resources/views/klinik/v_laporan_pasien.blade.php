@section('title')
Laporan Pasien Pegawai
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Pasien Pegawai
@endsection
@section('content')

<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN PASIEN PEGAWAI
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
                        <form action="{{route('filter_pasien')}}" method="post">
                            @csrf 
                            <br>
                            <div class="container">
                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <label for="date" class="col-form-label col-sm-2"> Dari Tanggal </label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control input-sm" id="from" name="fromDate" required/>
                                        </div>
                                        <label for="date" class="col-form-label col-sm-2"> Sampai Tanggal </label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control input-sm" id="to" name="toDate" required/>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn" name="search">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </form>
                        <!-- <p class="text-secondary">Dari Tanggal : {{date('d F Y',strtotime($fromDate))}} s/d {{date('d F Y',strtotime($toDate))}}  -->
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                            
                                        </tr>
                                    </thead>
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
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($pasien as $data)  
        
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->tanggal}}</td>
                                        <!-- <td>{{date('Y-m-d', strtotime($data->tanggal))}}</td> -->
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