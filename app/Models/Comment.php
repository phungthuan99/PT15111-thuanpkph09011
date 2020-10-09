<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $filltable = [
        'content',
        'student_id',
        'post_id',
        'status',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    // lấy desc trong bảng post
    // post->desc
    public function getPost_desc()
    {
        $post_desc = Post::find($this->post_id);
        if ($post_desc) {
            return $post_desc->desc;
        }

        return null;
    }

    // in ra tên sinh viên qua student_id
    public function getStudentNameComment()
    {
        $studentNameComment = Student::find($this->student_id);
        if ($studentNameComment) {
            return $studentNameComment->name;
        }

        return null;
    }
}
