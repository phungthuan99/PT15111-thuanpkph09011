@extends('students.master')

@section('content-header', 'Edit Student')

@section('content')


@section('title', 'Edit student ' . $student->name)

@section('title-2','Edit Student')
<form action="{{ route('students.update', $student->id )}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" value="{{ $student->name }}" name="name" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Phone</label>
            <input type="text" class="form-control" value="{{ $student->phone }}" name="phone" id="inputPassword4" placeholder="Phone">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" value="{{ $student->age }}" name="age" id="inputAge" placeholder="Age">
        </div>
        <div class="form-group col-md-6 border rounded">
            <label for="inputGender">Gender</label><br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="0">Nam<br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="1">Nữ<br>
            <input type="radio" checked="{{ $student->gender }}" name="gender" id="inputGender" value="2">Khác<br>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control" value="{{ $student->address }}" name="address" id="inputAddress2" placeholder="Address">
        </div>
        <div class="form-group col-md-6">
            <label for="inputStatus">Status</label><br>
            <input type="radio" name="is_active" id="inputStatus" value="0" checked="{{ $student->is_active === 0 }}">Kích Hoạt<br>
            <input type="radio" name="is_active" id="inputStatus" value="1" checked="{{ $student->is_active === 1 }}">Chưa kích hoạt<br>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection('content')

@section('footer', 'Footer list extends')