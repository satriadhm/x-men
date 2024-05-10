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
        Schema::create(' referensi_talent', function (Blueprint $table) {
            $table->id();
            $table->string('nama_referensi');
            $table->string('perusahaan_referensi');
            $table->string('jabatan');
            $table->string('nomor_handphone');
            $table->unsignedBigInteger('talent_id');
            $table->timestamps();

            $table->foreign('talent_id')->references('id')->on('talent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referensi_talent');
    }
};
