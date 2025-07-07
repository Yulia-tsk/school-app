<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['quiz', 'essay', 'video', 'reading']);
            $table->text('question');
            $table->json('options')->nullable(); // For quiz choices
            $table->string('correct_answer')->nullable(); // For auto-grading
            $table->timestamps();
            });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
