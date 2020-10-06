<!-- kế thừa file master: student-layout/master.blade.php -->
@extends('students.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','Danh sach sinh vien')
<!-- thay đổi nội dung phức tạp -->

@section('header', 'header-list extends')

@section('content')
<th>
    <a class="btn btn-success" href="{{ route('students.create') }}">Add student</a>
</th>
<table class="table table-light border">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Addres</th>
            <th scope="col">Active</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->age}}</td>
            <td>
                @if($student->gender == 0)
                Female
                @elseif($student->gender == 1)
                Male
                @else
                Nothing !
                @endif
            </td>
            <td>{{$student->address}}</td>
            <td>{{$student->is_active == 0 ? 'Yes' : 'No'}}</td>
            <td><a class="btn btn-sm btn-warning" href="{{ route('students.edit', $student->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="post">
                    @csrf
                    <input type="hidden" value="Delete" name="_method">
                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')

@section('footer', 'Footer list extends')