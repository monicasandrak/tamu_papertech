@section('title')
Tambah Data Obat
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
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
          <h3 class="card-title">Form Tambah Data Obat</h3>
        </div>
        {{-- @section('title')
Kelola Dokter
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Dokter
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH DATA PASIEN PEGAWAI
                            </h2>
                            
                                <table id="example1" class="table table-bordered table-striped">
                                
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"> --}}
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
                <label for="exampleInputEmail1">Bentuk Sediaan</label>
                <select name="satuan" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('satuan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kegunaan Obat</label>
                <input type="text" name="jenis_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Obat" value="{{ old('jenis_obat')}}">
                <div class="text-danger">
                    @error('jenis_obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input type="text" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Masukan Stok" value="{{ old('stok')}}">
                <div class="text-danger">
                    @error('stok')
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

