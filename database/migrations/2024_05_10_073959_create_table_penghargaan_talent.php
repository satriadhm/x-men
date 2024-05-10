<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penghargaan_talent', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_penghargaan');
            $table->enum('tingkat', ['internasional', 'nasional', 'institusi']);
            $table->string('diberikan_oleh');
            $table->year('tahun');
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
        Schema::dropIfExists('penghargaan_talent');
    }
};
