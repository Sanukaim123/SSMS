<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resu extends Model
{
    use HasFactory;

    protected $table = 'results'; // Specify the table name

    protected $fillable = [
        'student_name',
        'student_number',
        'course_unit',
        'grade',
        'credit_value',
        'gpa_value',
        'gpa_total',
        'department', // Add the department field to the fillable array
    ];
    

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->calculateAndSetGpaTotal();
        });

        static::updating(function ($model) {
            $model->calculateAndSetGpaTotal();
        });
    }

    public function calculateAndSetGpaTotal()
    {
        $this->gpa_total = $this->credit_value * $this->gpa_value;
    }

    // Accessor for GPA Total
    public function getGpaTotalAttribute()
    {
        // Calculate GPA Total when accessing it
        return $this->credit_value * $this->gpa_value;
    }
    // Define any additional relationships or methods here if needed
}