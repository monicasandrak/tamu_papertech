@section('title')
Tambah Data Perawat
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Perawat
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA PERAWAT</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_perawat"><i class="material-icons">group</i> Kelola Perawat</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Data Perawat</li>
                            </ol>
                            
                        </div>
                        <div class="body">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('insert_perawat')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
            @if(session('success'))
        <p class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">ID perawat</label>
                    <input type="text" name="id_perawat" class="form-control" id="exampleInputEmail1" value="{{ $id_baru}}" readonly>
                    <div class="text-danger">
                          @error('id_perawat')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{ old('tanggal')}}">
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div> --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama perawat</label>
                <input type="text" name="nama_perawat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama perawat" value="{{ old('nama_perawat')}}">
                <div class="text-danger">
                    @error('nama_perawat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal Lahir Perawat" value="{{ old('tanggal_lahir')}}">
              <div class="text-danger">
                  @error('tanggal_lahir')
                      {{ $message}}
                  @enderror
              </div>
          </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}"{{ old('jenis_kelamin') == $row ? 'selected' : null }}>{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('jenis_kelamin')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat" value="{{ old('alamat')}}">
                <div class="text-danger">
                    @error('alamat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto Perawat</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto_perawat" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
                <br>
                <div class="text-danger">
                    @error('foto_perawat')
                        {{ $message}}
                    @enderror
                    </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jadwal Kerja</label>
              <input type="text" name="jk" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jadwal Kerja" value="{{ old('jk')}}">
              <div class="text-danger">
                  @error('jk')
                      {{ $message}}
                  @enderror
              </div>
          </div>

            </div>
             </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('perawat') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

