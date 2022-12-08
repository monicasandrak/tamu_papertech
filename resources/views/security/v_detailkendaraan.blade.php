@section('title')
Detail Kendaraan
@endsection
@extends('layout/v_template3')
@section('page')
Detail Kendaraan
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA KENDARAAN</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_kendaraan"><i class="material-icons">group</i> Kelola Kendaraan</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail kendaraan</li>
                            </ol>
                            
                        </div>
                        <div class="body">
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-group form-float">
      <div class="form-line">
        <label>ID Pengendara</label>
          <input type="text" class="form-control" name="id_pengendara" id="exampleInputEmail1" value="{{ $kendaraan->id_pengendara }}" readonly>
          
          <!-- <div class="text-danger">
              @error('id_pengendara')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>Nama Pengendara</label>
          <input type="text" class="form-control" name="nama_pengendara" value="{{ $kendaraan->nama_pengendara }}" readonly >
          
          <!-- <div class="text-danger">
              @error('nama_pengendara')
                  {{ $message}}
              @enderror
          </div> -->
      </div>
  </div>
  
  <div class="form-group form-float">
      <div class="form-line">
        <label>Posisi</label>
          <input type="text" class="form-control" name="posisi" value="{{$kendaraan->posisi}}" readonly >
          
          <!-- <div class="text-danger">
              @error('posisi')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>

  <div class="form-group form-float">
      <div class="form-line">
        <label>Departement</label>
          <input type="text" class="form-control" name="departement" value="{{$kendaraan->departement}}" readonly >
          
          <!-- <div class="text-danger">
              @error('departement')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
  </div>
  <div class="form-group form-float">
      <div class="form-line">
        <label>No. Kendaraan</label>
          <input type="text" class="form-control" name="no_kendaraan" value="{{$kendaraan->no_kendaraan}}" readonly >
          
          <!-- <div class="text-danger">
              @error('no_kendaraan')
                  {{ $message}}
              @enderror
      </div> -->
  </div>
</div>
<div class="form-group form-float">
    <div class="form-line">
      <label>Pemeriksa Kendaraan</label>
        <input type="text" class="form-control" name="pemeriksa_kendaraan" value="{{$kendaraan->pemeriksa_kendaraan}}" readonly >
        
        <!-- <div class="text-danger">
            @error('pemeriksa_kendaraan')
                {{ $message}}
            @enderror
    </div> -->
</div>
</div>
<div class="form-group form-float">
    <div class="form-line">
      <label>Tahun Pajak</label>
        <input type="text" class="form-control" name="tanggal_pajak" value="{{$kendaraan->tanggal_pajak}}" readonly >
        
        <!-- <div class="text-danger">
            @error('tanggal_pajak')
                {{ $message}}
            @enderror
    </div> -->
</div>
</div>
<div class="form-group form-float">
    <div class="form-line">
      <label>Status Pajak</label>
        <input type="text" class="form-control" name="status_pajak" 
        value="@if ($kendaraan->tanggal_pajak > '2022') Aktif
            @endif
            @if ($kendaraan->tanggal_pajak <= '2022') Tidak Aktif
            @endif"
            
            readonly >
        
        
</div>
</div>
<div class="form-group form-float">
    <div class="form-line">
      <label>Status SIM</label>
        <input type="text" class="form-control" name="status_sim" value="{{$kendaraan->status_sim}}" readonly >
        
        <!-- <div class="text-danger">
            @error('status_sim')
                {{ $message}}
            @enderror
    </div> -->
</div>
</div>
<div class="form-group form-float">
    <div class="form-line">
      <label>Status Akhir</label>
        <input type="text" class="form-control" name="status_akhir" 
        value=" @if ($kendaraan->tanggal_pajak > '2022' && $kendaraan->status_sim == 'Aktif') Success
        @endif
            @if ($kendaraan->tanggal_pajak <= '2022' && $kendaraan->status_sim == 'Aktif') Failed
            @endif
            @if ($kendaraan->tanggal_pajak > '2022' && $kendaraan->status_sim == 'Tidak Aktif') Failed
            @endif
            @if ($kendaraan->tanggal_pajak <= '2022' && $kendaraan->status_sim == 'Tidak Aktif') Failed
            @endif" readonly >
        
        
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