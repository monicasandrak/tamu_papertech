@section('title')
Edit Data Pasien Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Edit Data Pasien Tamu
@endsection
@section('content')
<section class="content">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA PASIEN TAMU
                            </h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien_tamu"><i class="material-icons">group</i> Kelola Pasien Tamu</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Edit Pasien Tamu</li>
                            </ol>
                        </div>
                        
                            
                            
                        <form action="/pasien_tamu/update/{{$tamu->id_tamu}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                        
                        <div class="body">
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
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Tanggal</label>
                                <input class="form-control" type="text" value="{{$tamu->tanggal}}" name="tanggal" readonly />
                            </div>
                        </div>
                            <!-- <div class="text-danger">
                            @error('tanggal')
                            {{ $message }}
                            @enderror
                        </div> -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>ID Tamu</label>
                                <input class="form-control" type="text" value="{{$tamu->id_tamu}}" name="id_tamu" readonly />
                            </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('id_tamu')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nama Tamu</label>
                                <input class="form-control" type="text" placeholder="Masukan Nama Tamu" value="{{$tamu->nama_tamu}}" name="nama_tamu" readonly/>
                            </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('nama_tamu')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Alamat</label>
                                <input class="form-control" type="text" placeholder="Masukan Alamat" value="{{$tamu->alamat}}" name="alamat" readonly />
                            </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('alamat')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Pekerjaan</label>
                                <input class="form-control" type="text" placeholder="Masukan Pekerjaan" value="{{$tamu->pekerjaan}}" name="pekerjaan" readonly />
                            </div>
                        </div>

                        <!-- <div class="text-danger">
                            @error('pekerjaan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Keperluan</label>
                                <input class="form-control" type="text" placeholder="Masukan Keperluan" value="{{$tamu->keperluan}}" name="keperluan" readonly />
                            </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('keperluan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Bertemu Dengan </label>
                                <input class="form-control" type="text" placeholder="Masukan Bertemu Dengan" value="{{$tamu->bertemu_dengan}}" name="bertemu_dengan" readonly />
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Jam Masuk</label>
                                <input class="form-control" type="text" placeholder="Masukan Jam Masuk" value="{{$tamu->jam_masuk}}" name="jam_masuk" readonly />
                            </div>
                        </div>

                        <!-- <div class="text-danger">
                            @error('bertemu_dengan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <!-- <div class="mb-3">
                            <label>Nomor KTP/Identitas</label>
                            <input class="form-control" type="text" placeholder="Masukan Nomor KTP/Identitas" value="{{$tamu->no_ktp}}" name="no_ktp" readonly />
                        </div>
                        <br>

                        <div class="mb-3">
                        <label for="exampleInputFile">Foto KTP</label>
                        <br>
                            <img src="{{url('foto_ktp/'.$tamu->foto_ktp)}}" width="200px">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label>Nomor Kendaraan</label>
                            <input class="form-control" type="text" placeholder="Masukan Kendaraan" value="{{$tamu->no_kendaraan}}" name="no_kendaraan" readonly />
                        </div>
                        
                        <br>
                        <div class="mb-3">
                            <label>Jam Masuk</label>
                            <input class="form-control" type="text" placeholder="Masukan Jam Masuk" value="{{$tamu->jam_masuk}}" name="jam_masuk" readonly />
                        </div>
                       
                        
                        <br>

                        <div class="mb-3">
                            <label>Status</label>
                            <input class="form-control" type="text" placeholder="Masukan Jam Masuk" value="{{$tamu->status}}" name="status" readonly />
                        </div>
                        
                        
                        <br> -->

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Test Swab</label>
                                <input class="form-control" type="text" placeholder="Masukan Test Swab" value="{{$tamu->swab}}" name="swab" readonly />
                            </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('jam_masuk')
                            {{ $message }}
                            @enderror -->
                        
                       

                        <div class="form-group form-float">
                                
                                <input class="form-control" type="hidden" placeholder="Masukan Pemeriksa Pasien" value="{{Auth::user()->username}}" name="pemeriksa_pasien" readonly />
                        </div>
                        
                        <!-- <div class="text-danger">
                            @error('jam_masuk')
                            {{ $message }}
                            @enderror -->
                        
                        
                        <div class="form-group form-float">
                             
                                <label for="exampleInputEmail1">Hasil Swab</label>
                                <select name="hasil_swab" class="form-control" value="{{$tamu->hasil_swab}}">
                                    <option disabled selected>
                                        --- Pilih ---
                                    </option>
                                    @foreach ($dropdown2 as $hasil_swab)
                                        <option value="{{$hasil_swab}}">{{Str::ucfirst($hasil_swab)}}</option> <!-- php ucfirst() -->
                                    @endforeach
                                </select>
                        </div>
                        
                        <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>UPDATE</span>

                        <!-- <div class="mb-3">
                            <button class="btn btn-primary">Ubah</button>
                            <a class="btn btn-danger" href="{{ route('tamu') }}">Back</a>
                        </div> -->
                        </div>
                        <br>
                        <br>
            </div>
            </form>
<br>
        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
</div>
<br>
<br>
<br>
</section>

@endsection