<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stprofile extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'registration_no',
        'level',
        'semester'
    ];

}
