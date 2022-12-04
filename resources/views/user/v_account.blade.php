@section('title')
Account
@endsection
@extends('layout/v_template3')
@section('page')
Account
@endsection
@section('content')
@auth
<section class="content">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ACCOUNT
                            </h2>
                            <br>
                            <!-- <ol class="breadcrumb breadcrumb-col-teal">
                                <li><a href="/dashboard"><i class="material-icons">home</i> Dashboard</a></li>
                                <li><a href="active"><i class="material-icons">library_books</i> Account</a></li> 
                            </ol> -->
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/dashboard"><i class="material-icons">group</i> Dashboard</a></li>
                                <li class="active"><i class="material-icons">library_books</i>Account</li>
                            </ol>
                        </div>
                        
                            
                            
                        
                        
                        <div class="body">
                        <form action="{{ route('account.action') }}" method="post">
                            @csrf
                            @method("put")
                            <div class="card-body">
                            @if (session('success'))
                                  <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5><i class="icon fas fa-check"></i> Success</h5>
                                {{ session('success') }}
                                  </div>
                                @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                        <div class="mb-3">
                            <label>ID User</label>
                            <input class="form-control" type="text" value="{{old('id',Auth::user()->id)}}" name="id" readonly />
                            <!-- <div class="text-danger">
                            @error('id')
                            {{ $message }}
                            @enderror
                        </div> -->
                        <br>
                        <div class="mb-3">
                            <label>Username</label>
                            <input class="form-control" type="text" value="{{old('name',Auth::user()->username)}}" name="username" />
                        </div>
                        <!-- <div class="text-danger">
                            @error('username')
                            {{ $message }}
                            @enderror
                        </div> -->
                        <br>
                        <div class="mb-3">
                            <label>Level</label>
                            <input class="form-control" type="text" value="{{old('level',Auth::user()->level)}}" name="level" readonly/>
            </div>
            <!-- <div class="text-danger">
                @error('level')
                    {{ $message }}
                @enderror
            </div> -->
            <br>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" type="password" value="{{old('password',Auth::user()->password)}}" name="password" readonly/>
            </div>
            <!-- <div class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </div> -->
            <br>
            <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>UPDATE</span>
            <!-- <div class="mb-3">
                <button class="btn btn-primary">Ubah</button>
                <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
            </div> -->
            </div>
            <br>
<br>
            </div>
            
<br>
        </form>
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
@endauth
@endsection