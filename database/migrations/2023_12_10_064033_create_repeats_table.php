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
        Schema::create('repeats', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('student_num');
            $table->string('address');
            $table->integer('amount');
            $table->enum('degree', ['Basic Degree', 'Postgraduation Degree']);
            $table->text('description');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repeats');
    }
};
