@section('title')
Kelola Data Tamu
@endsection
@extends('layout/v_template')
@section('page')
Kelola Data Tamu
@endsection
@section('content')

<script type="text/javascript" src="{{asset('scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables-simple-demo.js')}}"></script>

<br>
<br>
<br>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Kelola Data Tamu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('pesan') }}
        </div>
        @endif
        <div align="right">
            <a href="/tamu/add" class="btn btn-sm btn-primary">Add Data</a><br>
            <br>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="datatablesSimple">
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
          <th>Action</th>
        </tr>
      </thead>
        <tbody>
        <?php $no=1;?>
        @foreach ($tamu as $data)  
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{date('d-M-Y',strtotime($data->tanggal))}}</td>
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
            
            <td>
              <a href="/tamu/detail/{{$data->id_tamu}}" class="text-success"><i class="fas fa-eye">&#xE254;</i></a>
              <a href="/tamu/edit/{{$data->id_tamu}}" class="text-primary"><i class="fas fa-edit">&#xE254;</i></a>
              <button type="button" data-toggle="modal" data-target="#delete{{$data->id_tamu}}" class="text-danger">
              <i class="fa fa-trash">&#xE872;</i>
              </button>
          </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
        <!-- <tfoot>
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
          <th>Action</th>
        </tr>
        </tfoot> -->
      <!-- </table> -->
      @foreach ($tamu as $data)
      <div class="modal fade" id="delete{{$data->id_tamu}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_tamu}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="/tamu/delete/{{$data->id_tamu}}" class="btn btn-outline-light">Yes</a>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

      <!-- <tfoot>
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
        </tr>
        </tfoot>
      </table>
      @foreach ($tamu as $data)
      <div class="modal fade" id="status{{$data->id_tamu}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h6 class="modal-title">{{$data->nama_tamu}}</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda ingin menyetujui data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">

            @if ($data->status == '1')
                            <td class="text text-success">Disetujui</td>
                            @else
                            <td class="text text-danger">Tidak Disetujui</td>
                            @endif    
            <a href="/tamu/delete/{{$data->id_tamu}}" class="btn btn-outline-light">Setuju</a>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Sejutu</button>
              </div>
          </div>
          <!-- /.modal-content -->
        <!-- </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- @endforeach  --> 

    </div>
    <!-- /.card-body -->
  <!-- </div>
  <!-- /.card -->
  
</div>
  @endsection

