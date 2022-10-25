@section('title')
Tambah Data Obat
@endsection
<br>
<br>
<br>
@extends('layout/v_template_pasien')
@section('page')
Tambah Data Obat
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Data Pasien Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_obat')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">ID Obat</label>
                    <input type="text" name="id_obat" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                    <div class="text-danger">
                          @error('id_obat')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Obat</label>
              <input type="text" name="nama_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Obat" value="{{ old('nama_obat')}}">
              <div class="text-danger">
                    @error('nama_obat')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Obat</label>
                <input type="text" name="jenis_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Obat" value="{{ old('jenis_obat')}}">
                <div class="text-danger">
                    @error('jenis_obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Satuan" value="{{ old('satuan')}}">
                <div class="text-danger">
                    @error('satuan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jumlah" value="{{ old('jumlah')}}">
                <div class="text-danger">
                    @error('jumlah')
                        {{ $message}}
                    @enderror
                </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('obat') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

