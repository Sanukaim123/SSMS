<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table = 'chats';

   protected $fillable = [
    'Name',
    'Email',
    'Level',
    'Semester',
    'Department',
    'Demostrater',
    'Message',

   ];
}
