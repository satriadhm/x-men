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
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('nama_talent');
            $table->string('gelar_akademik');
            $table->string('tempat_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->unsignedBigInteger('id_agama');
            $table->string('jabatan_terakhir');
            $table->string('alamat_rumah');
            $table->string('nomor_telefon');
            $table->string('email')->unique();
            $table->string('npwp');
            $table->unsignedBigInteger('id_suku');
            $table->enum('golongan_darah', ['A','B', 'AB','O']);
            $table->enum('status_perkawinan', ['belum kawin','kawin','cerai hidup','cerai mati']);
            $table->timestamps();

            $table->foreign('id_suku')->references('id')->on('suku')->onDelete('cascade');
            $table->foreign('id_agama')->references('id')->on('agama')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent');
    }
};
