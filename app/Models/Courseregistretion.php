<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Courseregistretion extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'Course_Code'
    ];
}
