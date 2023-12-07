<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

protected $fillable = [
    
    'add_tutorial',
    'add_comment',
    'subject',
    'level',
    'course',
    'final_submission_date'];
}