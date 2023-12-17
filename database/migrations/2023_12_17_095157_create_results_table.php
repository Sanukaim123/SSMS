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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_number');
            $table->string('course_unit');
            $table->string('grade');
            $table->decimal('credit_value', 5, 2); // Adjust precision and scale as needed
            $table->decimal('gpa_value', 3, 2)->nullable(); // GPA value column
            $table->decimal('gpa_total', 5, 2)->nullable();
            $table->string('department')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
