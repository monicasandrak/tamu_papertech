@section('title')
Detail Obat
@endsection
@extends('layout/v_template3')
@section('page')
Detail Obat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA OBAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_obat"><i class="material-icons">group</i> Kelola Obat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Obat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-group form-float">
      <div class="form-line">
        <label>ID Obat</label>
          <input type="text" class="form-control" name="id_obat" id="exampleInputEmail1" value="{{ $obats->id_obat }}" readonly>
          
          <!-- <div class="text-danger">
              @error('id_obat')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Nama Obat</label>
          <input type="text" class="form-control" name="nama_obat" value="{{ $obats->nama_obat }}" readonly >
          
          <!-- <div class="text-danger">
              @error('nama_obat')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  
  <div class="form-group form-float">
      <div class="form-line">
        <label>Jenis Obat</label>
          <input type="text" class="form-control" name="jenis_obat" value="{{$obats->jenis_obat}}" readonly >
          
          <!-- <div class="text-danger">
              @error('jenis_obat')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>

  <div class="form-group form-float">
      <div class="form-line">
        <label>Satuan</label>
          <input type="text" class="form-control" name="satuan" value="{{$obats->satuan}}" readonly >
          
          <!-- <div class="text-danger">
              @error('satuan')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Stok</label>
          <input type="text" class="form-control" name="stok" value="{{$obats->stok}}" readonly >
          
          <!-- <div class="text-danger">
              @error('stok')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
</div>

  
  

  <!-- <button type="submit" class="btn bg-teal waves-effect">
      <i class="material-icons">save</i>
      <span>SAVE</span> -->
</form>
</div>
</div>
</div>
</div>