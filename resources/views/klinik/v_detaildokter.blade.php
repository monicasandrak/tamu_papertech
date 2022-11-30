@section('title')
Detail Dokter
@endsection
@extends('layout/v_template3')
@section('page')
Detail Dokter
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA DOKTER</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_dokter"><i class="material-icons">group</i> Kelola Dokter</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Dokter</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->


  <div class="form-group form-float">
      <div class="form-line">
        <label>ID Dokter</label>
          <input type="text" class="form-control" name="id_dokter" id="exampleInputEmail1" value="{{ $dokter->id_dokter }}" readonly>
          
          <!-- <div class="text-danger">
              @error('id_dokter')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Nama Dokter</label>
          <input type="text" class="form-control" name="nama_dokter" value="{{ $dokter->nama_dokter }}" readonly >
          
          <!-- <div class="text-danger">
              @error('nama_dokter')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  
  <div class="form-group form-float">
      <div class="form-line">
        <label>Tanggal Lahir</label>
          <input type="text" class="form-control" name="tanggal_lahir" value="{{$dokter->tanggal_lahir}}" readonly >
          
          <!-- <div class="text-danger">
              @error('tanggal_lahir')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="jenis_kelamin" value="{{ $dokter->jenis_kelamin }}" readonly >
          
          <!-- <div class="text-danger">
              @error('jenis_kelamin')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Alamat</label>
          <input type="text" class="form-control" name="alamat" value="{{$dokter->alamat}}" readonly >
          
          <!-- <div class="text-danger">
              @error('alamat')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Keahlian</label>
          <input type="text" class="form-control" name="keahlian" value="{{$dokter->keahlian}}" readonly >
          
          <!-- <div class="text-danger">
              @error('keahlian')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
</div>
<div class="form-group form-float">
  <div class="form-line">
    <label>Jadwal Kerja</label>
      <input type="text" class="form-control" name="jk" value="{{$dokter->jk}}" readonly >
      
      <!-- <div class="text-danger">
          @error('jk')
              {{ $message}}
          @enderror
  </div> -->
</div>
</div>
 
  
  <div class="form-group form-float">
      <!-- <div class="form-line"> -->
         <label>Foto Dokter</label>
         <br> <br>
          <img src="{{url('foto_dokter/'.$dokter->foto_dokter)}}" width="200px">
          
         
          <!-- <div class="text-danger">
              @error('foto_dokter')
                  {{ $message}}
              @enderror
      </div> -->
  <!-- </div> -->
  </div>
  
  

  <!-- <button type="submit" class="btn bg-teal waves-effect">
      <i class="material-icons">save</i>
      <span>SAVE</span> -->
</form>
</div>
</div>
</div>
</div>