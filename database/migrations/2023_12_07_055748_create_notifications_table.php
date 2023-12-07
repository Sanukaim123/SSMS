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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('add_tutorial');
            $table->longText('add_comment');
            $table->enum('subject',['Mathematics','Applied Mathematics','Computer Science','Chemistry','Physics']);
            $table->enum('level', ['Level1', 'Level2', 'Level3']);
            $table->enum('course',['Course1', 'Course2', 'Course3']);
            $table->date('final_submission_date'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};

