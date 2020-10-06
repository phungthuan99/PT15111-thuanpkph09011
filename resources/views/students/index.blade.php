<!-- kế thừa file master: student-layout/master.blade.php -->
@extends('admin-layout.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','Danh sach sinh vien')
<!-- thay đổi nội dung phức tạp -->

@section('header', 'header-list extends')

@section('content')
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
            <th scope="col">Sửa - Xóa</th>
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
@endsection

@section('footer', 'Footer list extends')