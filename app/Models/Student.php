<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'table_first';

    protected $filltable = [
        'name',
        'phone',
        'age',
        'gender',
        'address',
        'is_active'
    ];
}
