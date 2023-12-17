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
        Schema::create('sylllabus11s', function (Blueprint $table) {
            $table->id();
            $table->char('S_Code');
            $table->char('Level');
            $table->char('Semester_name');
            $table->char('Course_code',10);
            //$table->char('Course_name');
            $table->char('Credit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sylllabus11s');
    }
};
