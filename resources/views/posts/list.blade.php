<!-- kế thừa file master: student-layout/master.blade.php -->
@extends('students.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','List Post')
<!-- thay đổi nội dung phức tạp -->

@section('header')

@section('content')

@section('title-2','List Post')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Desc</th>
            <th scope="col">content</th>
            <th scope="col">image_url</th>
            <th scope="col">Status</th>
            <th scope="col">Student</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->desc}}</td>
            <td>{{$post->content}}</td>
            <td><img src="{{$post->image_url}}" width="100" height="auto" alt="anh"></td>
            <td>{{$post->status}}</td>
            <td>{{$post->getStudentName()}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="10">{{ $posts->links() }}</td>
        </tr>
    </tbody>
</table>
@endsection('content')

@section('footer', 'Footer list extends')