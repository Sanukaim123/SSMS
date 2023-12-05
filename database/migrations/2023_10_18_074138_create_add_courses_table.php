<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('add_courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseCode');
            $table->string('courseName');
            $table->integer('credit');
            $table->enum('subject',['Mathematics'.'Applied-mathematics','Computer-Science','Physics','Chemistry']); 
            $table->enum('level',['Level-I','Level-II','Level-III'])->default('Level-I');
            $table->enum('semester',['Semester-I','Semester-II'])->default('Semester-I');
            $table->text('course_content')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_courses');
    }
};
