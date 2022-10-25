@section('title')
Edit Data Tamu
@endsection
<br>
<br>
<br>
@extends('layout/v_template_pasien')
@section('page')
Edit Data Pasien Tamu
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <div class="col-md-6">

     <!-- general form elements -->
     
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Data Pasien Tamu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/pasien_tamu/update/{{$tamu->id_tamu}}" method="POST" enctype="multipart/form-data"> 
            <!-- <form action="{{route('update_tamu', $tamu->id_tamu)}}" method="post" enctype="multipart/form-data"> -->
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Tamu</label>
                    <input type="text" name="id_tamu" class="form-control" id="exampleInputEmail1"  value="{{$tamu->id_tamu}}" readonly>
                    <div class="text-danger">
                          @error('id_tamu')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{$tamu->tanggal}}" readonly>
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Tamu</label>
                <input type="text" name="nama_tamu" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Tamu" value="{{$tamu->nama_tamu}}" readonly>
                <div class="text-danger">
                    @error('nama_tamu')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat" value="{{$tamu->alamat}}" readonly>
                <div class="text-danger">
                    @error('alamat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan" value="{{$tamu->pekerjaan}}" readonly>
                <div class="text-danger">
                    @error('pekerjaan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keperluan</label>
                <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Keperluan" value="{{$tamu->keperluan}}" readonly>
                <div class="text-danger">
                    @error('keperluan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bertemu Dengan</label>
                <input type="text" name="bertemu_dengan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Bertemu Dengan" value="{{$tamu->bertemu_dengan}}" readonly>
                <div class="text-danger">
                    @error('bertemu_dengan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor KTP</label>
                <input type="text" name="no_ktp" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor KTP" value="{{$tamu->no_ktp}}" readonly>
                <div class="text-danger">
                    @error('no_ktp')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto KTP</label>
              <div class="input-group" readonly>
                <!-- <div class="custom-file" readonly>
                  <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile" readonly>
                  <label class="custom-file-label" for="exampleInputFile" readonly>Choose file</label>
                </div>
                <div class="input-group-append" readonly>
                  <span class="input-group-text" readonly>Upload</span>
                </div> -->
                <br>
                <div class="text-danger">
                    @error('foto_ktp')
                        {{ $message}}
                    @enderror
                    </div>
              </div>
              
              <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="100px">
            </div>
           
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor Kendaraan</label>
                <input type="text" name="no_kendaraan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor Kendaraan" value="{{$tamu->no_kendaraan}}" readonly>
                <div class="text-danger">
                    @error('no_kendaraan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jam Masuk</label>
                <input type="text" name="jam_masuk" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jam Masuk" value="{{$tamu->jam_masuk}}" readonly>
                <div class="text-danger">
                    @error('jam_masuk')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Masukan Status" value="{{$tamu->status}}" readonly>
                <div class="text-danger">
                    @error('status')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hasil Swab</label>
                <select name="hasil_swab" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown2 as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('hasil_swab')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Hasil Swab</label>
                <input type="text" name="hasil_swab" class="form-control" id="exampleInputEmail1" placeholder="Masukan Hasil Swab" value="{{$tamu->hasil_swab}}" >
                <div class="text-danger">
                    @error('hasil_swab')
                        {{ $message}}
                    @enderror
                </div>
            </div> -->
            
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('tamu') }}">Back</a>
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

