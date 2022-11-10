@section('title')
Change Password 
@endsection
@extends('layout/v_template3')
@section('page')
Change Password
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
                                CHANGE PASSWORD
                            </h2>
                        </div>
                        
                            @if(session('success'))
                            <div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ session('success') }}
                            </div>
                            @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                            
                        <form action="{{ route('password.action') }}" method="post">
                            @csrf
                            @method("put")
                        
                        <div class="body">
                        <div class="mb-3">
                            <label>Password Lama <span class="text-danger">*</span> </label>
                            <input class="form-control" type="password" name="old_password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
                        </div>
                            <div class="text-danger">
                            @error('old_password')
                                {{ $message }}
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label>Password Baru <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="new_password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"  />
                        </div>
                        <div class="text-danger">
                            @error('new_password')
                                {{ $message }}
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label>Konfirmasi Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="new_password_confirmation" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
                        </div>
                        <div class="text-danger">
                            @error('new_password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                        <br>
                        
            <div class="mb-3">
                <button class="btn btn-primary">Ubah</button>
                <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
                </div>
            </div>
            <br>
<br>
<br>
<br>
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