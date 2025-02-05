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
        Schema::create('agama', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 50); // kode wilayah
            $table->string('wilayah', 255); // nama wilayah

           // kolom untuk data agama
            $table->string('islam_lk'); 
            $table->string('islam_pr'); 
            $table->string('islam_jml');

            $table->string('kristen_lk'); 
            $table->string('kristen_pr'); 
            $table->string('kristen_jml');

            $table->string('katholik_lk'); 
            $table->string('katholik_pr'); 
            $table->string('katholik_jml');

            $table->string('hindu_lk'); 
            $table->string('hindu_pr'); 
            $table->string('hindu_jml');

            $table->string('budha_lk'); 
            $table->string('budha_pr'); 
            $table->string('budha_jml');

            $table->string('khonghucu_lk'); 
            $table->string('khonghucu_pr'); 
            $table->string('khonghucu_jml');

            $table->string('kepercayaan_lk'); 
            $table->string('kepercayaan_pr'); 
            $table->string('kepercayaan_jml');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agama');
    }
};
