@section('title')
Tambah Data Stok Obat
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Stok Obat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA STOK OBAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Stok Obat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Data Stok Obat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
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
            <label for="exampleInputEmail1">ID Obat Masuk</label>
            <input type="text" name="id_obatmasuk" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
            <div class="text-danger">
                  @error('id_obatmasuk')
                      {{ $message}}
                  @enderror
            </div>
          </div>
        <div class="form-group">
            <label for="nama">Nama Obat</label>
            <select class="form-control" id="position-option" name="nama_obat">
                <option disabled selected>--- Pilih ---</option>
               @foreach ($obat as $obat)
                  <option value="{{ $obat->nama_obat }}"{{ old('nama_obat') == $obat->id_obat ? 'selected' : null }}>{{ $obat->nama_obat }}</option>
               @endforeach
            </select>
            <div class="text-danger">
                @error('nama_obat')
                    {{ $message}}
                @enderror
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

