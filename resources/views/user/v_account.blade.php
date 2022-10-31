@section('title')
Account
@endsection
<br>
<br>
<br>
@extends('layout/v_template2')
@section('page')
Account
@endsection
@section('content')
@auth
<div class="container-fluid">
    <h3 class="mt-4">Account</h3>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Account</li>
    </ol> -->
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('account.action') }}" method="post">
            @csrf
            @method("put")
            <div class="mb-3">
                <label>ID User</label>
                <input class="form-control" type="text" value="{{old('id',Auth::user()->id)}}" name="id" readonly />
            </div>
            <div class="text-danger">
                @error('id')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input class="form-control" type="text" value="{{old('name',Auth::user()->username)}}" name="username"/>
            </div>
            <div class="text-danger">
                @error('username')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label>Level</label>
                <input class="form-control" type="text" value="{{old('level',Auth::user()->level)}}" name="level" readonly/>
            </div>
            <div class="text-danger">
                @error('level')
                    {{ $message }}
                @enderror
            <div class="mb-3">
                <button class="btn btn-primary">Ubah</button>
                <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endauth
@endsection