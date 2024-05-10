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
        Schema::create('akun_social_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_social_media');
            $table->unsignedBigInteger('id_talent');
            $table->string('nama_akun');
            $table->timestamps();

            $table->foreign('id_social_media')->references('id')->on('social_media')->onDelete('cascade');
            $table->foreign('id_talent')->references('id')->on('talent')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_social_media');
    }
};
