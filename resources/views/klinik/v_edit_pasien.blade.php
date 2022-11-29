@section('title')
Edit Data Pasien Pegawai
@endsection
@extends('layout/v_template3')
@section('page')
Edit Data Pasien Pegawai
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DATA PASIEN PEGAWAI</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Pasien Pegawai</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Pasien Pegawai</li>
                            </ol>
                            
                        </div>
                        <div class="body">
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
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
            <option>{{$pasien->jenis_kelamin}}</option>
            @foreach ($dropdown1 as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('jenis_kelamin')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Umur</label>
                <input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="Masukan Umur" value="{{$pasien->umur}}">
                <div class="text-danger">
                    @error('umur')
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
                <label for="Obat">Obat</label>
                <select class="form-control" id="position-option" name="obat">
                    <option>{{$pasien->obat}}</option>
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

