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
        Schema::create('pelatihan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan');
            $table->unsignedBigInteger('id_kota');
            $table->year('tahun_diklat');
            $table->string('nomor_sertifikasi');
            $table->enum('tingkat',['perusahaan','nasional','internasional']);
            $table->enum('jenis',['jabatan','fungsional']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihan');
    }
};
