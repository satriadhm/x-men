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
        Schema::create('interest_talent', function (Blueprint $table) {
            $table->id();
            $table->string('ekonomi_bisnis');
            $table->string('pengembangan_kapasitas_kepemimpinan');
            $table->string('relasi_jejaring');
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
        Schema::dropIfExists('interest_talent');
    }
};
