@section('title')
Detail Data User
@endsection
@extends('layout/v_template3')
@section('page')
Detail Data User
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DETAIL DATA USER</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_user"><i class="material-icons">group</i> Kelola User</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Detail User</li>
                            </ol>
                            
                        </div>
                        <div class="body">
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID User</label>
                                        <input type="text" class="form-control" name="id" id="exampleInputEmail1" value="{{ $user->id }}" readonly>
                                        
                                        <!-- <div class="text-danger">
                                            @error('id_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('nama_security')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Level</label>
                                        <input type="text" class="form-control" name="level" value="{{ $user->level }}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('tanggal_lahir')
                                                {{ $message}}
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="{{$user->password}}" readonly >
                                        
                                        <!-- <div class="text-danger">
                                            @error('alamat')
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
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
           
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
           
            <!-- #END# Validation Stats -->
        </div>
    </section>