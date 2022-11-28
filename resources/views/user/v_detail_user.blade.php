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
                        <!-- <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>ID User</label>
                                        <input type="text" class="form-control" name="id" id="exampleInputEmail1" value="{{ $user->id }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Level</label>
                                        <input type="text" class="form-control" name="level" value="{{ $user->level }}" readonly >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="{{$user->password}}" readonly >
                                    </div>
                                </div>
                            
                        </div> -->
                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">ID User</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control"  value="{{ $user->id }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Username</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $user->username }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Level</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $user->level }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" value="{{ $user->password }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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