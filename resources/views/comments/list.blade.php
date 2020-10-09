<!-- kế thừa file master: student-layout/master.blade.php -->
@extends('students.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','List Comments')
<!-- thay đổi nội dung phức tạp -->

@section('header')

@section('content')

@section('title-2','List comments')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Content</th>
            <th scope="col">Student</th>
            <th scope="col">Post_id</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
        <tr>
            <th scope="row">{{$comment->id}}</th>
            <td>{{$comment->content}}</td>
            <td>{{$comment->getStudentNameComment()}}</td>
            <td>{{$comment->getPost_desc()}}</td>

            <td>{{$comment->status}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="10">{{ $comments->links() }}</td>
        </tr>
    </tbody>
</table>
@endsection('content')

@section('footer', 'Footer list extends')