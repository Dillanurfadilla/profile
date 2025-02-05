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
        Schema::create('kk', function (Blueprint $table) {
            $table->id();
            $table->string('kode'); // Kolom kode wilayah
            $table->string('wilayah'); // Kolom nama wilayah
            $table->string('kk_lk'); // Jumlah KK Laki-laki
            $table->string('kk_pr'); // Jumlah KK Perempuan
            $table->string('kk_jml'); // Jumlah total KK
            $table->string('kepemilikan_lk'); // Kepemilikan KK Laki-laki
            $table->string('kepemilikan_pr'); // Kepemilikan KK Perempuan
            $table->string('kepemilikan_jml'); // Total kepemilikan KK
            $table->string('belum_memiliki_lk'); // Belum memiliki KK Laki-laki
            $table->string('belum_memiliki_pr'); // Belum memiliki KK Perempuan
            $table->string('belum_memiliki_jml'); // Total belum memiliki KK
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kk');
    }
};
