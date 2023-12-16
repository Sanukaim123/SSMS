<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class St_result extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'student_number',
        'result1',
        'result2'
    ];
}
