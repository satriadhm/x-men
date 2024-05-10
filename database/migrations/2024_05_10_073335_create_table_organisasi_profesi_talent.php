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
        Schema::create('table_organisasi_profesi_talent', function (Blueprint $table) {
            $table->id();
            $table->string('nama_organisasi');
            $table->string('jabatan');
            $table->enum('jenis_organisasi',['professional','non-formal']);
            $table->year('tahun_awal')->nullable()->check('tahun_awal >= 1901 AND tahun_awal <= 2155');
            $table->year('tahun_akhir')->nullable()->check('tahun_akhir >= 1901 AND tahun_akhir <= 2155');            
            $table->string('uraian_singkat_organisasi');
            $table->id('talent_id');
            $table->timestamps();

            $table->foreign('talent_id')->references('id')->on('talent')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_organisasi_profesi_talent');
    }
};
