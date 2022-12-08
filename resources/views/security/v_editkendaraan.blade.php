@section('title')
Edit Data Kendaraan
@endsection
@extends('layout/v_template3')
@section('page')
Edit Data Kendaraan
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DATA KENDARAAN</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_kendaraan"><i class="material-icons">group</i> Kelola Kendaraan</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail Kendaraan</li>
                            </ol>
                            
                        </div>
                        <div class="body">
        <!-- /.card-header -->
        <!-- form start -->
            <form action="/kendaraan/update/{{$kendaraan->id_pengendara}}" method="POST" enctype="multipart/form-data"> 
            <!-- <form action="{{route('update_kendaraan', $kendaraan->id_pengendara)}}" method="post" enctype="multipart/form-data"> -->
          @csrf
          @method('put')
          <!-- @method('PUT') -->
         
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Pengendara</label>
                    <input type="text" name="id_pengendara" class="form-control" id="exampleInputEmail1"  value="{{$kendaraan->id_pengendara}}" readonly>
                    <div class="text-danger">
                          @error('id_pengendara')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pengendara</label>
              <input type="text" name="nama_pengendara" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pengendara" value="{{$kendaraan->nama_pengendara}}">
              <div class="text-danger">
                    @error('nama_pengendara')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Posisi</label>
                <select name="posisi" class="form-control">
            <option>{{$kendaraan->posisi}}</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('posisi')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Departement</label>
              <select name="departement" class="form-control">
          <option>{{$kendaraan->departement}}</option>
          @foreach ($dropdown2 as $row)
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
                <label for="exampleInputEmail1">No. Kendaraan</label>
                <input type="text" name="no_kendaraan" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Kendaraan" value="{{$kendaraan->no_kendaraan}}">
                <div class="text-danger">
                    @error('no_kendaraan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Pajak</label>
              <select name="tanggal_pajak" class="form-control">
          <option>{{$kendaraan->tanggal_pajak}}</option>
          @foreach ($dropdown4 as $row)
          <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
          @endforeach
        </select>
              <div class="text-danger">
                  @error('tanggal_pajak')
                      {{ $message}}
                  @enderror
              </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status SIM</label>
            <select name="status_sim" class="form-control">
        <option>{{$kendaraan->status_sim}}</option>
        @foreach ($dropdown3 as $row)
        <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
        @endforeach
      </select>
            <div class="text-danger">
                @error('status_sim')
                    {{ $message}}
                @enderror
            </div>
        </div>
          
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('kendaraan') }}">Back</a>
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
