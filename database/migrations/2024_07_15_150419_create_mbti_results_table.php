<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mbti_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('mbti_type_id')->nullable();
            $table->integer('E')->default(0);
            $table->integer('I')->default(0);
            $table->integer('S')->default(0);
            $table->integer('N')->default(0);
            $table->integer('T')->default(0);
            $table->integer('F')->default(0);
            $table->integer('J')->default(0);
            $table->integer('P')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
            $table->foreign('mbti_type_id')->references('id')->on('mbti_types')->onDelete('set null');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_results');
    }
};
