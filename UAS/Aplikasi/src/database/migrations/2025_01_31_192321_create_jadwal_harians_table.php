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
        Schema::create('jadwal_harians', function (Blueprint $table) {
            $table->id();
            $table->string('hari'); // Senin - Minggu
            $table->string('nama_olahraga');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('tempat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_harians');
    }
};
