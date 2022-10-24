@section('title')
Tambah Data Tamu
@endsection
<br>
<br>
<br>
@extends('layout/v_template')
@section('page')
Tambah Data Tamu
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detail Data Tamu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Tamu : </label>
          {{$tamu->id_tamu}}
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal : </label>
          {{$tamu->tanggal}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Nama Tamu : </label>
          {{$tamu->nama_tamu}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Alamat : </label>
          {{$tamu->alamat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Pekerjaan : </label>
          {{$tamu->pekerjaan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Keperluan : </label>
          {{$tamu->keperluan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Bertemu Dengan</label>
          {{$tamu->bertemu_dengan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Nomor KTP/Nomor Identitas : </label>
          {{$tamu->no_ktp}}
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Foto : </label>
            <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="200px">
          </div>
      </div>
      <div class="form-group">
          <label for="exampleInputFile">Nomor Kendaraan : </label>
          {{$tamu->no_kendaraan}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jam Masuk : </label>
          {{$tamu->jam_masuk}}
        </div>
      <!-- /.card-body -->

      
    </form>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('tamu') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

