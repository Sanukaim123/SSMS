<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCourses extends Model
{
    use HasFactory;
    protected $fillable=[
        'courseCode',
        'courseName',
        'credit',
        'subject',
        'level',
        'semester',
    ];
}
