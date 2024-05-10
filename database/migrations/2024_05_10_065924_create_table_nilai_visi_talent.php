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
        Schema::create('table_nilai_visi_talent', function (Blueprint $table) {
            $table->id();
            $table->string('nilai_pribadi');
            $table->string('visi_pribadi');
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
        Schema::dropIfExists('table_nilai_visi_talent');
    }
};
