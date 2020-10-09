<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $filltable = [
        'desc',
        'content',
        'image_url',
        'status',
        'student_id',
    ];

    // liên kết khóa ngoại
    public function comments()
    {
        // hasMany 1-n
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    // thể hiện mối quan hệ 1 bài post sẽ thuộc về 1 sv
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    // function category sẽ thể hiện nhiều post, mỗi pots có nhiều category
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }

    // lấy tên sinh viên
    // post->student_id
    public function getStudentName()
    {
        $studentName = Student::find($this->student_id);
        if ($studentName) {
            return $studentName->name;
        }

        return null;
    }
}
