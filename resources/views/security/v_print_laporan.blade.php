@section('title')
Kelola Data Tamu
@endsection
@extends('layout/v_template')
@section('page')
Kelola Data Tamu
@endsection
@section('content')


<link rel="stylesheet" href="{{asset('styles.css')}}"> 
		 <!-- Link javascript public/scripts.js-->
<script type="text/javascript" src="{{asset('scripts.js')}}"></script> 
						 <!-- Link javascript public/datatables-simple-demo.js-->
<script type="text/javascript" src="{{asset('datatables-simple-demo.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> 


<br>
<br>
<br>
<div class="card">
  
    <!-- <div class="card-header"> -->
    <div id="btnprint" class="container mt-3">
      <h3 class="card-title">Laporan Data Tamu</h3>
      <p class="text-secondary">Dari Tanggal: {{date('d-M-Y',strtotime($datefrom))}} s/d {{date('d-M-Y',strtotime($datecurrent))}} </p>
    
    <!-- /.card-header -->
    <div class="card-body">
    <!-- <div id="btnprint" class="container mt-3">
      <table id="example1" class="table table-bordered table-striped">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('pesan') }}
        </div> -->
        <!-- @endif -->
        <!-- <div align="right">
            <a href="/tamu/add" class="btn btn-sm btn-primary">Add Data</a><br>
            <br>
        </div> -->
        
        
        
        <table class="table table-bordered" id="datatablesSimple">
        <!-- <table id="example2" class="table table-bordered table-striped"> -->
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
          <th>Foto KTP</th>
          <th>Nomor Kendaraan</th>
          <th>Jam Masuk</th>
          <th>Status</th>
          <th>Hasil Swab</th>
          <!-- <th>Action</th> -->
        </tr>
      </thead>
        <tbody>
        <?php $no=1;?>
        @foreach ($tamu as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{date('d-M-Y', strtotime($data->tanggal))}}</td>
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
            <td>{{$data->status}}</td>
          
            <td>{{$data->hasil_swab}}</td>
            
            <!-- <td>
              <a href="/tamu/detail/{{$data->id_tamu}}" class="btn btn-sm btn-success">Detail</a>
              <a href="/tamu/edit/{{$data->id_tamu}}" class="btn btn-sm btn-warning">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_tamu}}">
                  Delete
              </button>
          </td> -->
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
<div class="container mb-1">
        <button onclick="printDiv('btnprint')" class="btn btn-outline-primary"><i class="fas fa-fw fa-print"></i>Print</button> 
        <a class="btn btn-danger" href="{{ route('laporan_tamu') }}">Back</a>
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
      </script>
      </body>
      </html>
</script>
        
      

     

    </div>
    <!-- /.card-body -->
  <!-- </div>
  <!-- /.card -->
  
</div>
  @endsection

