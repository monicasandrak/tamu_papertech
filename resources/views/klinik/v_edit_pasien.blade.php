@section('title')
Pasien
@endsection
@extends('layout/v_template_pasien')
@section('page')
Edit Data pasien
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">

     <!-- general form elements -->
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/pasien/update/{{$pasien->id_pasien}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID pasien</label>
                    <input type="text" name="id_pasien" class="form-control" id="exampleInputEmail1" value="{{$pasien->id_pasien}}" readonly>
                    <div class="text-danger">
                          @error('id_pasien')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{$pasien->tanggal}}">
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
                <input type="text" name="departement" class="form-control" id="exampleInputEmail1" placeholder="Masukan Departement" value="{{$pasien->departement}}">
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
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

