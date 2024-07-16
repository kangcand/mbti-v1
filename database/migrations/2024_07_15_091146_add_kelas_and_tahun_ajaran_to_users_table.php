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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('tahun_ajaran_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropForeign(['tahun_ajaran_id']);
            $table->dropColumn('kelas_id');
            $table->dropColumn('tahun_ajaran_id');

        });
    }
};
