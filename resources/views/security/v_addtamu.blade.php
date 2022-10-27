@section('title')
Tambah Data Tamu
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
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
          <h3 class="card-title">Form Tambah Data Tamu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_tamu')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">ID Tamu</label>
                    <input type="text" name="id_tamu" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                    <div class="text-danger">
                          @error('id_tamu')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
<!--            
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{ old('tanggal')}}">
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div> -->
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
                <label for="exampleInputEmail1">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan')}}">
                <div class="text-danger">
                    @error('pekerjaan')
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
                <label for="exampleInputEmail1">Nomor KTP/No Identitas</label>
                <input type="text" name="no_ktp" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor KTP atau Nomor Identitas" value="{{ old('no_ktp')}}">
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
                <label for="exampleInputEmail1">Nomor Kendaraan</label>
                <input type="text" name="no_kendaraan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor Kendaraan" value="{{ old('no_kendaraan')}}">
                <div class="text-danger">
                    @error('no_kendaraan')
                        {{ $message}}
                    @enderror
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
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('status')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Hasil Swab</label>
                <input type="text" name="hasil_swab" class="form-control" id="exampleInputEmail1" placeholder="Masukan Hasil Swab" value="{{ old('hasil_swab')}}" readonly>
                <div class="text-danger">
                    @error('hasil_swab')
                        {{ $message}}
                    @enderror
                </div>
            </div> -->
          </div>
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

