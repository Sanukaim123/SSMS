<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combination1 extends Model
{
    use HasFactory;
    protected $fillable=[
        'Combination_name',
        'S_Code'
    ];
}
