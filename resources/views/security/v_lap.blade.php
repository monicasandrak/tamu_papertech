@section('title')
Kelola Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Data Security
@endsection
@section('content')

						 <!-- Link javascript public/datatables-simple-demo.js-->

<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> 
<section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Basic Examples -->
            <div  id="btnprint" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KELOLA SECURITY
                            </h2>
                                
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        
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
                            <div class="container mb-1">
                             <!-- <a href="/invoiceprint" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
        <button onclick="printDiv('btnprint')" class="btn btn-outline-primary" ><i class="fas fa-fw fa-print"></i>Print</button> 
        <a class="btn btn-danger" href="{{ route('laporan_klinik') }}">Back</a>
      </div>
      <!-- <script>
        $(#table).ready(function() {
          function print() {
            window.print();
          }
        });
      </script> -->
      <script>
        function printDiv(btnprint){
			var printContents = document.getElementById(btnprint).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
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