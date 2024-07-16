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
        Schema::create('mbti_types', function (Blueprint $table) {
            $table->id();
            $table->string('type')->unique();
            $table->text('description');
            $table->text('suitable_jobs');
            $table->text('suitable_education');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_types');
    }
};
