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
        Schema::create('narasumber_pembicara_talent', function (Blueprint $table) {
            $table->id();
            $table->string('acara');
            $table->string('penyelenggara');
            $table->year('tahun');
            $table->string('lokasi');
            $table->bigInteger('peserta');
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
        Schema::dropIfExists('narasumber_pembicara_talent');
    }
};
