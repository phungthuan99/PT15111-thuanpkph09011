@extends('student-layout.login')

@section('title','Title Login')

@section('header','Header Login')

@section('navbar','navbar login')
@section('content')
<form method="post" action="{{ route('post-login') }}">
    @csrf
    <div class="form-group">
        <label for="">Usename</label>
        <input type="text" name="username" id="" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Login</button>
    </div>
</form>

@endsection

@section('footer','footer Login')