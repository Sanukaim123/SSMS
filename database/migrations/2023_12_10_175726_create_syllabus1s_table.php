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
        Schema::create('syllabus1s', function (Blueprint $table) {
            $table->id();
            $table->char('S_Code',3);
            $table->char( 'Level',10);
            $table->char('Semester_name',3);
            $table->char('Course_Code',10);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syllabus1s');
    }
};
