@section('title')
Edit Data User
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Edit Data User
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form User Data User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data"> 
           
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID User</label>
                    <input type="text" name="id" class="form-control" id="exampleInputEmail1"  value="{{$user->id}}" readonly>
                    <div class="text-danger">
                          @error('id_user')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
           
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username" value="{{$user->username}}">
                <div class="text-danger">
                    @error('username')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Level</label>
                <select name="level" class="form-control" value="{{$user->level}}">
            <option disabled selected>
            {{$user->level}}
            </option>
            @foreach ($dropdown3 as $level)
            <option value="{{$user->level}}">{{Str::ucfirst($level)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('level')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password" value="{{$user->password}}">
                <div class="text-danger">
                    @error('password')
                        {{ $message}}
                    @enderror
                </div>
            </div>           
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('user') }}">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
            
          </div>
        </form>
      </div>
          </div>
        
          <!-- /.card-body -->
         
        
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

