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
        Schema::create('opportunity_project', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project');
            $table->string('deskripsi');
            $table->string('status');
            $table->unsignedBigInteger('perusahaan_id');
            $table->unsignedBigInteger('kota_kabupaten_id');
            $table->unsignedBigInteger('provinsi_id');
            $table->string('gaji');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('penyelenggara');
            
            $table->timestamps();

            $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('cascade');
            $table->foreign('kota_kabupaten_id')->references('id')->on('kota_kabupaten')->onDelete('cascade');
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunity_project');
    }
};
