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
        Schema::create('kota_kabupaten', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kota_kabupaten');
            $table->unsignedBigInteger('provinsi_id');
            $table->timestamps();
            
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kota_kabupaten');
    }
};
