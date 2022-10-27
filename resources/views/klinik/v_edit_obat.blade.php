@section('title')
Edit Data Obat
@endsection
<br>
<br>
<br>
@extends('layout/v_template_pasien')
@section('page')
Edit Data Obat
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Data Obat</h3>
        </div>
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
                <label for="exampleInputEmail1">Jenis Obat</label>
                <input type="text" name="jenis_obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Obat" value="{{$obats->jenis_obat}}">
                <div class="text-danger">
                    @error('jenis_obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Satuan</label>
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
                <label for="exampleInputEmail1">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah" value="{{$obats->jumlah}}">
                <div class="text-danger">
                    @error('jumlah')
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

