@section('title')
Tambah Data User
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data User
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA USER</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_user"><i class="material-icons">group</i> Kelola User</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah User</li>
                            </ol>
                        </div>
                        <div class="body">
                            <form action="{{route('insert_user')}}" method="POST" enctype="multipart/form-data">
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
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>ID User</label>
                                        <input type="text" class="form-control" name="id" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Masukan Username" value="{{ old('username')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('username')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Level</label>
                                        <select name="level" class="form-control show-tick">
                                          <option disabled selected>--- Pilih ---</option>
                                        @foreach ($dropdown3 as $row)
                                          <option value="{{$row}}">{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
                                        @endforeach
                                        </select>
                                        <!-- <div class="text-danger">
                                            @error('level')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Masukan Password" value="{{ old('password')}}" >
                                        
                                        <!-- <div class="text-danger">
                                            @error('password')
                                                {{ $message}}
                                            @enderror
                                    </div> -->
                                </div>
                                </div>
                                
                                
                                
                                <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span>
                                </button>
                                <!-- <button type="submit" class="btn bg-teal waves-effect">UPDATE</button> -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
           
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
           
            <!-- #END# Validation Stats -->
        </div>
    </section>