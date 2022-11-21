@section('title')
Tambah Data Security
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Tambah Data Security
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Data Security</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_security')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
            @if(session('success'))
        <p class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Security</label>
                    <input type="text" name="id_security" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                    <div class="text-danger">
                          @error('id_security')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
    
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Security</label>
                <input type="text" name="nama_security" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Security" value="{{ old('nama_security')}}">
                <div class="text-danger">
                    @error('nama_security')
                        {{ $message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal Lahir" value="{{ old('tanggal_lahir')}}">
              <div class="text-danger">
                    @error('tanggal_lahir')
                        {{ $message}}
                    @enderror
              </div>
            </div> 

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat" value="{{ old('alamat')}}">
                <div class="text-danger">
                    @error('alamat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jk" class="form-control">
            <option selected>--- Pilih ---</option>
            @foreach ($dropdown as $jk)
            <option value="{{$jk}}">{{Str::ucfirst($jk)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('jk')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <br> <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Bagian</label>
                <select name="bagian" class="form-control">
            <option selected>--- Pilih ---</option>
            @foreach ($dropdown2 as $bagian)
            <option value="{{$bagian}}">{{Str::ucfirst($bagian)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('bagian')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <br><br>
            <div class="form-group">
              <label for="exampleInputFile">Foto Security</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto_security" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
                <br>
                <div class="text-danger">
                    @error('foto_security')
                        {{ $message}}
                    @enderror
                    </div>
              </div>
            </div>

            
            
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('security') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

