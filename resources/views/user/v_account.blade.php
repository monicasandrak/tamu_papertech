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
                            
                        <form action="{{ route('account.action') }}" method="post">
                            @csrf
                            @method("put")
                        
                        <div class="body">
                        <div class="mb-3">
                            <label>ID User</label>
                            <input class="form-control" type="text" value="{{old('id',Auth::user()->id)}}" name="id" readonly />
                            <div class="text-danger">
                            @error('id')
                            {{ $message }}
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label>Username</label>
                            <input class="form-control" type="text" value="{{old('name',Auth::user()->username)}}" name="username" />
                        </div>
                        <div class="text-danger">
                            @error('username')
                            {{ $message }}
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label>Level</label>
                            <input class="form-control" type="text" value="{{old('level',Auth::user()->level)}}" name="level" readonly/>
            </div>
            <div class="text-danger">
                @error('level')
                    {{ $message }}
                @enderror
            </div>
            <br>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" type="text" value="{{old('password',Auth::user()->password)}}" name="password" readonly/>
            </div>
            <div class="text-danger">
                @error('password')
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