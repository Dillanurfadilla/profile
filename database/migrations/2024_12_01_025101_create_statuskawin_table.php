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
        Schema::create('statuskawin', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('wilayah');
            $table->integer('belum_kawin_lk');
            $table->integer('belum_kawin_pr');
            $table->integer('belum_kawin_jml');
            $table->integer('kawin_lk');
            $table->integer('kawin_pr');
            $table->integer('kawin_jml');
            $table->integer('cerai_hidup_lk');
            $table->integer('cerai_hidup_pr');
            $table->integer('cerai_hidup_jml');
            $table->integer('cerai_mati_lk');
            $table->integer('cerai_mati_pr');
            $table->integer('cerai_mati_jml');

           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuskawin');
    }
};
