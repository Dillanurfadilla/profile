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
        Schema::create('disabilitas', function (Blueprint $table) {
            $table->id();
            $table->string('kode'); // Kolom untuk kode
            $table->string('wilayah'); // Kolom untuk wilayah
            $table->string('disabilitas_fisik_lk'); // Kolom untuk disabilitas fisik LK
            $table->string('disabilitas_fisik_pr'); // Kolom untuk disabilitas fisik PR
            $table->string('disabilitas_fisik_jml'); // Kolom untuk total disabilitas fisik
            $table->string('disabilitas_fisik_dan_mental_lk'); // Kolom untuk disabilitas fisik dan mental LK
            $table->string('disabilitas_fisik_dan_mental_pr'); // Kolom untuk disabilitas fisik dan mental PR
            $table->string('disabilitas_fisik_dan_mental_jml'); // Kolom untuk total disabilitas fisik dan mental
            $table->string('disabilitas_netra_buta_lk'); // Kolom untuk disabilitas netra buta LK
            $table->string('disabilitas_netra_buta_pr'); // Kolom untuk disabilitas netra buta PR
            $table->string('disabilitas_netra_buta_jml'); // Kolom untuk total disabilitas netra buta
            $table->string('disabilitas_mental_jiwa_lk'); // Kolom untuk disabilitas mental jiwa LK
            $table->string('disabilitas_mental_jiwa_pr'); // Kolom untuk disabilitas mental jiwa PR
            $table->string('disabilitas_mental_jiwa_jml'); // Kolom untuk total disabilitas mental jiwa
            $table->string('disabilitas_rungu_wicara_lk'); // Kolom untuk disabilitas rungu wicara LK
            $table->string('disabilitas_rungu_wicara_pr'); // Kolom untuk disabilitas rungu wicara PR
            $table->string('disabilitas_rungu_wicara_jml'); // Kolom untuk total disabilitas rungu wicara
            $table->string('disabilitas_lainnya_lk'); // Kolom untuk disabilitas lainnya LK
            $table->string('disabilitas_lainnya_pr'); // Kolom untuk disabilitas lainnya PR
            $table->string('disabilitas_lainnya_jml'); // Kolom untuk total disabilitas lainnya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disabilitas');
    }
};
