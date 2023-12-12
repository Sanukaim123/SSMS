<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

protected $fillable = [
    
    'file',
    'add_description',
    'subject',
    'level',
    'semester',
    'course',
    'final_submission_date'];
}