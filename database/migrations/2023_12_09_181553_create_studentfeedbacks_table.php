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
        Schema::create('studentfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('subjectselection');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('E');
            $table->string('F');
            $table->string('G');
            $table->string('H');
            $table->string('I');
            $table->string('J');
            $table->string('overall');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentfeedbacks');
    }
};
