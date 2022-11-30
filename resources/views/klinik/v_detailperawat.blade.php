@section('title')
Detail Perawat
@endsection
@extends('layout/v_template3')
@section('page')
Detail Perawat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA PERAWAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_perawat"><i class="material-icons">group</i> Kelola Perawat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Perawat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-group form-float">
      <div class="form-line">
        <label>ID Perawat</label>
          <input type="text" class="form-control" name="id_perawat" id="exampleInputEmail1" value="{{ $perawat->id_perawat }}" readonly>
          
          <!-- <div class="text-danger">
              @error('id_perawat')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Nama Perawat</label>
          <input type="text" class="form-control" name="nama_perawat" value="{{ $perawat->nama_perawat }}" readonly >
          
          <!-- <div class="text-danger">
              @error('nama_perawat')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  
  <div class="form-group form-float">
      <div class="form-line">
        <label>Tanggal Lahir</label>
          <input type="text" class="form-control" name="tanggal_lahir" value="{{$perawat->tanggal_lahir}}" readonly >
          
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
          <input type="text" class="form-control" name="jenis_kelamin" value="{{ $perawat->jenis_kelamin }}" readonly >
          
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
          <input type="text" class="form-control" name="alamat" value="{{$perawat->alamat}}" readonly >
          
          <!-- <div class="text-danger">
              @error('alamat')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>
<div class="form-group form-float">
  <div class="form-line">
    <label>Jadwal Kerja</label>
      <input type="text" class="form-control" name="jk" value="{{$perawat->jk}}" readonly >
      
      <!-- <div class="text-danger">
          @error('jk')
              {{ $message}}
          @enderror
  </div> -->
</div>
</div>
 
  
  <div class="form-group form-float">
      <!-- <div class="form-line"> -->
         <label>Foto Perawat</label>
         <br> <br>
          <img src="{{url('foto_perawat/'.$perawat->foto_perawat)}}" width="200px">
          
         
          <!-- <div class="text-danger">
              @error('foto_perawat')
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