<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class St_mark extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_num',
        'course_unit',
        'subject_name',
        'grade'
    ];
}
