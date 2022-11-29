@section('title')
Edit Data Obat
@endsection
@extends('layout/v_template3')
@section('page')
Edit Data Obat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DATA OBAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Obat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Obat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/obat/update/{{$obats->id_obat}}" method="POST" enctype="multipart/form-data"> 
            <!-- <form action="{{route('update_obat', $obats->id_obat)}}" method="post" enctype="multipart/form-data"> -->
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Obat</label>
                    <input type="text" name="id_obat" class="form-control" id="exampleInputEmail1"  value="{{$obats->id_obat}}" readonly>
                    <div class="text-danger">
                          @error('id_obat')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Obat</label>
              <input type="text" name="nama_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Obat" value="{{$obats->nama_obat}}">
              <div class="text-danger">
                    @error('nama_obat')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bentuk Sediaan</label>
                <select name="satuan" class="form-control">
            <option>{{$obats->satuan}}</option>
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
                <input type="text" name="jenis_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Obat" value="{{$obats->jenis_obat}}">
                <div class="text-danger">
                    @error('jenis_obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input type="text" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Masukan stok" value="{{$obats->stok}}">
                <div class="text-danger">
                    @error('stok')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('obat') }}">Back</a>
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

