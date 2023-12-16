<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stresult extends Model
{
    use HasFactory;
    protected $fillable = [
        'reg_no',
        'course_code',
        'course_name',
        'result'
    ];
}
