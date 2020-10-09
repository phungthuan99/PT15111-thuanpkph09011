<!-- kế thừa file master: student-layout/master.blade.php -->
@extends('students.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','List Categories')
<!-- thay đổi nội dung phức tạp -->

@section('header')

@section('content')

@section('title-2','List Categories')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Post_id</th>
            <th scope="col">Category_id</th>
        </tr>
    </thead>
    tổng {{count($categories)}} bài post
    <tbody>
        @foreach($categories as $cate)
        <tr>
            <th scope="row">{{$cate->id}}</th>
            <td>{{$cate->post_id}}</td>
            <td>{{$cate->category_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')

@section('footer', 'Footer list extends')