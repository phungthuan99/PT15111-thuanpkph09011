@extends('students.master')

@section('title', 'Create student')

@section('content-header', 'Create Student')

@section('content')

<form action="{{ route('students.store', $student->id )}}" method="GET">
    @csrf
    <input type="hidden" name="_method" value="GET">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Phone</label>
            <input type="text" class="form-control" name="phone" id="inputPassword4" placeholder="Phone">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" name="age" id="inputAge" placeholder="Age">
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Address">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 ">
            <label for="inputGender">Gender</label><br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="0">Nam<br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="1">Nữ<br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="2">Khác<br>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputStatus">Status</label><br>
            <input type="radio" name="is_active" id="inputStatus" value="0" checked="{{ $student->is_active === 0 }}">Kích Hoạt<br>
            <input type="radio" name="is_active" id="inputStatus" value="1" checked="{{ $student->is_active === 1 }}">Chưa kích hoạt<br>
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-6 offset-3">Create</button>
</form>
@endsection