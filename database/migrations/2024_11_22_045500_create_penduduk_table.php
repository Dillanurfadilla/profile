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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('dkb'); // Data Keluarga Besar
            $table->year('tahun'); // Tahun
            $table->unsignedBigInteger('id_kecamatan'); // Foreign key to kecamatan
            $table->unsignedBigInteger('id_desa'); // Foreign key to desa
            $table->string('agama'); // Agama
            $table->boolean('disabilitas'); // Disabilitas (boolean)
            $table->string('golongan_darah'); // Golongan Darah
            $table->boolean('kepemilikan_kk'); // Kepemilikan Kartu Keluarga (boolean)
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('pendidikan'); // Pendidikan
            $table->string('status_kawin'); // Status Kawin
            $table->integer('umur_tunggal'); // Umur Tunggal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
