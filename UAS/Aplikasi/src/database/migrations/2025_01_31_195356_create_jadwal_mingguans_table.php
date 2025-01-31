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
        Schema::create('jadwal_mingguans', function (Blueprint $table) {
            $table->id();
            $table->integer('minggu_ke'); // Minggu ke-1, ke-2, ke-3, ke-4
            $table->string('hari'); // "Sabtu" atau "Minggu"
            $table->string('nama_olahraga');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('tempat');
            $table->string('perlengkapan')->nullable(); // Opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mingguans');
    }
};
