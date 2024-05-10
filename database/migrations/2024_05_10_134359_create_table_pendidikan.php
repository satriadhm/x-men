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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang');
            $table->string('jurusan');
            $table->year('tahun_lulus');
            $table->string('perguruan_tinggi');
            $table->unsignedBigInteger('id_kota');
            $table->string('penghargaan_didapat');
            $table->timestamps();

            $table->foreign('id_kota')->references('id')->on('kota_kabupaten')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
