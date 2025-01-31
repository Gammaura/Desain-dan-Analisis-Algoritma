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
        Schema::create('data_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggotas');
            $table->string('nama');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->float('bmi');
            $table->string('tekanan_darah');
            $table->integer('denyut_jantung');
            $table->string('riwayat_cedera')->nullable();
            $table->string('kondisi_kesehatan_khusus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kesehatans');
    }
};
