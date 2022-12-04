@section('title')
Laporan Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Tamu
@endsection
@section('content')

<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA TAMU
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
                        <form action="{{route('filter_tamu')}}" method="post">
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
                                        <th>ID Tamu</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Keperluan</th>
                                        <th>Bertemu Dengan</th>
                                        <th>No KTP</th>
                                        <!-- <th>Foto KTP</th> -->
                                        <th>Nomor Kendaraan</th>
                                        <th>Jam Masuk</th>
                                        <th>Pemeriksa Tamu</th>
                                        <th>Status</th>
                                        <th>Swab</th>
                                        
                                        <th>Hasil Swab</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>ID Tamu</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Keperluan</th>
                                        <th>Bertemu Dengan</th>
                                        <th>No KTP</th>
                                        <!-- <th>Foto KTP</th> -->
                                        <th>Nomor Kendaraan</th>
                                        <th>Jam Masuk</th>
                                        <th>Pemeriksa Tamu</th>
                                        <th>Status</th>
                                        <th>Swab</th>
                                        <th>Hasil Swab</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($tamu as $data)  
        
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->tanggal}}</td>
                                        <!-- <td>{{date('Y-m-d', strtotime($data->tanggal))}}</td> -->
                                        <td>{{$data->id_tamu}}</td>
                                        <td>{{$data->nama_tamu}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->pekerjaan}}</td>
                                        <td>{{$data->keperluan}}</td>
                                        <td>{{$data->bertemu_dengan}}</td>
                                        <td>{{$data->no_ktp}}</td>
                                        <!-- <td><img src="{{url('foto_ktp/'.$data->foto_ktp)}}" width="100px"> -->
                                        <td>{{$data->no_kendaraan}}</td>
                                        <td>{{$data->jam_masuk}}</td>
                                        <td>{{$data->pemeriksa_tamu}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>{{$data->swab}}</td>

                                        <td>{{$data->hasil_swab}}</td>
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