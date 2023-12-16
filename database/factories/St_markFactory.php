<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\St_mark>
 */
class St_markFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_num'=>$this->faker->student_num,
            'course_unit'=>$this->faker->course_unit,
            'subject_name'=>$this->faker->subject_name,
            'grade'=>$this->faker->grade
        ];
    }
}
