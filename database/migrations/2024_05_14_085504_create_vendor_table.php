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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vendor');
            $table->string('alamat_vendor');
            $table->string('email_vendor');
            $table->string('telepon_vendor');
            $table->string('website_vendor');
            $table->string('jenis_vendor');
            $table->string('deskripsi_vendor');
            $table->string('logo_vendor');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
