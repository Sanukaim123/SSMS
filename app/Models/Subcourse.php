<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model
{
    use HasFactory;
    protected $fillable=[
        'S_Code',
        'Course_Code'
    ];
}
