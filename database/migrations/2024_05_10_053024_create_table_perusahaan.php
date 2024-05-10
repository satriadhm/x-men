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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->enum('kelas_bumn',['kelas_1','kelas_2','kelas_3','kelas_4','kelas_5']);
            $table->unsignedBigInteger('id_klaster');
            $table->timestamps();

            $table->foreign('id_klaster')->references('id')->on('klaster')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
