@section('title')
Detail Data Security
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Detail Data Security
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detail Data Security</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Security : </label>
          {{$security->id_security}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Security : </label>
          {{$security->nama_security}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Tanggal Lahir : </label>
          {{$security->tanggal_lahir}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Alamat : </label>
          {{$security->alamat}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Jenis Kelamin: </label>
          {{$security->jk}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Bagian: </label>
          {{$security->bagian}}
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Foto Security : </label>
            <img src="{{url('foto_security/'.$security->foto_security)}}" width="200px">
          </div>
      
  
      <!-- /.card-body -->

      
    </form>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('security') }}">Back</a>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

