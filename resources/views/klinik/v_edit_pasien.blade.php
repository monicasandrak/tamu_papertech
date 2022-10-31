@section('title')
Edit Data pPsien
@endsection
<br>
<br>
<br>
@extends('layout/v_template_pasien')
@section('page')
Tambah Data Pasien
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Data Pasien</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/pasien/update/{{$pasien->id_pasien}}" method="POST" enctype="multipart/form-data"> 
            <!-- <form action="{{route('update_pasien', $pasien->id_pasien)}}" method="post" enctype="multipart/form-data"> -->
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Pasien</label>
                    <input type="text" name="id_pasien" class="form-control" id="exampleInputEmail1"  value="{{$pasien->id_pasien}}" readonly>
                    <div class="text-danger">
                          @error('id_pasien')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{$pasien->tanggal}}" readonly> 
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pasien" value="{{$pasien->nama_pasien}}">
                <div class="text-danger">
                    @error('nama_pasien')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Departement</label>
                <select name="departement" class="form-control">
            <option>{{$pasien->departement}}</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
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
                <input type="text" name="keluhan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Keluhan" value="{{$pasien->keluhan}}">
                <div class="text-danger">
                    @error('keluhan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" id="exampleInputEmail1" placeholder="Masukan Diagnosa" value="{{$pasien->diagnosa}}">
                <div class="text-danger">
                    @error('diagnosa')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Obat</label>
                <input type="text" name="obat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Obat" value="{{$pasien->obat}}">
                <div class="text-danger">
                    @error('obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('pasien') }}">Back</a>
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

