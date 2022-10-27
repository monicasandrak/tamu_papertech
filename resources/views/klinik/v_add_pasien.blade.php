@section('title')
Tambah Data Pasien
@endsection
<br>
<br>
<br>
@extends('layout/v_template_pasien')
@section('page')
Tambah Data Pasien Pegawai
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
        <form action="{{route('insert_pasien')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">ID pasien</label>
                    <input type="text" name="id_pasien" class="form-control" id="exampleInputEmail1" value="{{ $id_baru}}" readonly>
                    <div class="text-danger">
                          @error('id_pasien')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{ old('tanggal')}}">
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama pasien" value="{{ old('nama_pasien')}}">
                <div class="text-danger">
                    @error('nama_pasien')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Departement</label>
                <select name="departement" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}"{{ old('departement') == $row ? 'selected' : null }}>{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('departement')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keluhan</label>
                <input type="text" name="keluhan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Keluhan" value="{{ old('keluhan')}}">
                <div class="text-danger">
                    @error('keluhan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" id="exampleInputEmail1" placeholder="Masukan Diagnosa" value="{{ old('diagnosa')}}">
                <div class="text-danger">
                    @error('diagnosa')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="Obat">Obat</label>
                <select class="form-control" id="position-option" name="obat">
                    <option disabled selected>--- Pilih ---</option>
                   @foreach ($obat as $obat)
                      <option value="{{ $obat->nama_obat }}"{{ old('obat') == $obat->id_obat ? 'selected' : null }}>{{ $obat->nama_obat }}</option>
                   @endforeach
                </select>
                <div class="text-danger">
                    @error('obat')
                        {{ $message}}
                    @enderror
                </div>
             </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('pasien') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

