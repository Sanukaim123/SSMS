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
        Schema::create('st_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_num');
            $table->string('course_unit');
            $table->string('subject_name');
            $table->string('grade');
            $table->foreign('student_num')->references('id')->on ('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_marks');
    }
};
