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
        Schema::create('table_aspirasi_talent', function (Blueprint $table) {
            $table->id();
            $table->id('talent_id');
            $table->enum('kelas_bumn',['kelas_1','kelas_2','kelas_3','kelas_4','kelas_5']);
            $table->id('klaster_id');
            $table->id('bidang_id');
            $table->timestamps();

            $table->foreign('klaster_id')->references('id')->on('klaster')->onDelete('cascade');
            $table->foreign('bidang_id')->references('id')->on('bidang')->onDelete('cascade');
            $table->foreign('talent_id')->references('id')->on('talent')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_aspirasi_talent');
    }
};
