<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus1 extends Model
{
    use HasFactory;
    protected $fillable=[
        'S_Code',
        'Level',
        'Semester_name',
        'Course_Code'
    ];
}
