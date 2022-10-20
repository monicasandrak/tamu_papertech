@section('title')
Tambah Data Tamu
@endsection
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
     <div class="d-flex h-100 justify-content-center align-items-center">
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Add</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/tamu/insert" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Tamu</label>
                    <input type="text" name="id_tamu" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                    <div class="text-danger">
                          @error('id_tamu')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{ old('tanggal')}}">
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Tamu</label>
                <input type="text" name="nama_tamu" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Tamu" value="{{ old('nama_tamu')}}">
                <div class="text-danger">
                    @error('nama_tamu')
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
            <div class="form-group">
                <label for="exampleInputEmail1">Keperluan</label>
                <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Keperluan" value="{{ old('keperluan')}}">
                <div class="text-danger">
                    @error('keperluan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bertemu Dengan</label>
                <input type="text" name="bertemu_dengan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Bertemu Dengan" value="{{ old('bertemu_dengan')}}">
                <div class="text-danger">
                    @error('bertemu_dengan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor KTP</label>
                <input type="text" name="no_ktp" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor KTP" value="{{ old('no_ktp')}}">
                <div class="text-danger">
                    @error('no_ktp')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto KTP</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
                <br>
                <div class="text-danger">
                    @error('foto_ktp')
                        {{ $message}}
                    @enderror
                    </div>
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jam Masuk</label>
                <input type="text" name="jam_masuk" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jam Masuk" value="{{ old('jam_masuk')}}">
                <div class="text-danger">
                    @error('jam_masuk')
                        {{ $message}}
                    @enderror
                </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

