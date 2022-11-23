@section('title')
Laporan Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Tamu
@endsection
@section('content')
 
		 <!-- Link javascript public/scripts.js-->

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
                                LAPORAN TAMU
                            </h2>
                            
                                
                            
                        <div id="btnprint" class="body">
                        <!-- <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span> -->
                        
                            <div class="table-responsive">
                              <!-- <div id="btnprint"> -->
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
                                        <th>Hasil Swab</th>
                                        
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
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
                                        <th>Hasil Swab</th>
                                        
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($tamu as $data)  
        
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{date('d F Y',strtotime($data->tanggal))}}</td>
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
                                      @if ($data->hasil_swab == "Positif")
                                      <h5><span class="badge badge-danger">Positif<i class="fas fa-times"></i></span></h5>
                                      @endif
                                      @if ($data->hasil_swab == "Negatif")
                                      <h5><span class="badge badge-success">Negatif<i class="fas fa-check"></i></span></h5>
                                      @endif
                                      
                                    </td>
            
                                    
                                  </tr>
                                  @endforeach
                                </tbody>
                                
                              </table>
                            </div>
                           
                            
                              <!-- <div align="right">
                                    <a href="/cetak_laporan_tamu" target="_blank" class="btn bg-teal waves-effect">
                                    <i class="material-icons">add_circle_outline</i>
                                    <span>PRINT</span>
                                    </a>
                                
                                </div> -->

                                <div class="container mb-1">
        <button onclick="printDiv('btnprint')" class="btn btn-outline-primary"><i class="fas fa-fw fa-print"></i>Print</button> 
        
      </div>
      <script>
        $(#table).ready(function() {
          function print() {
            window.print();
          }
        });
      </script>
      <script>
        function printDiv(btnprint){
			var printContents = document.getElementById(btnprint).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
      </script>
      </body>
      </html>
</script>
                            </div>
                           
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