@section('title')
Edit Data perawat
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Edit Data perawat
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
       <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Data perawat</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/perawat/update/{{$perawat->id_perawat}}" method="POST" enctype="multipart/form-data"> 
            <!-- <form action="{{route('update_perawat', $perawat->id_perawat)}}" method="post" enctype="multipart/form-data"> -->
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
          <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Perawat</label>
            <input type="text" name="nama_perawat" class="form-control" id="exampleInputEmail1"  value="{{$perawat->nama_perawat}}">
            <div class="text-danger">
                @error('nama_perawat')
                    {{ $message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" value="{{$perawat->tanggal_lahir}}">
          <div class="text-danger">
              @error('tanggal_lahir')
                  {{ $message}}
              @enderror
          </div>
      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
        <option>{{$perawat->jenis_kelamin}}</option>
        @foreach ($dropdown as $row)
        <option value="{{$row}}"{{ old('jenis_kelamin') == $row ? 'selected' : null }}>{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
        @endforeach
      </select>
            <div class="text-danger">
                @error('jenis_kelamin')
                    {{ $message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="{{$perawat->alamat}}">
            <div class="text-danger">
                @error('alamat')
                    {{ $message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto Perawat</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="foto_perawat" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
            <br>
            <div class="text-danger">
                @error('foto_perawat')
                    {{ $message}}
                @enderror
                </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jadwal Kerja</label>
          <input type="text" name="jk" class="form-control" id="exampleInputEmail1"  value="{{$perawat->jk}}">
          <div class="text-danger">
              @error('jk')
                  {{ $message}}
              @enderror
          </div>
      </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('perawat') }}">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
            
          </div>
        </form>
      </div>
          </div>
      </div>
          <!-- /.card-body -->
         
        
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

