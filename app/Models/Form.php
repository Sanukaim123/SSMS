<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'student_num',
        'address',
        'amount',
        'degree',
        'description',

    ];
}
