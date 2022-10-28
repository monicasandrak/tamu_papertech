@section('title')
Detail Data User
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Tambah Data User
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detail Data User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID User : </label>
          {{$user->id}}
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Username : </label>
          {{$user->username}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Level : </label>
          {{$user->level}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Password : </label>
          {{$user->password}}
        </div>
      <!-- /.card-body -->

      
    </form>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('user') }}">Back</a>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

