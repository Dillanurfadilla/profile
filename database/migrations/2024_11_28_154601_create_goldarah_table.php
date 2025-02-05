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
        Schema::create('goldarah', function (Blueprint $table) {
            $table->id();
            $table->string('kode'); // kode
            $table->string('wilayah'); // wilayah
            $table->integer('a_lk'); // a_lk
            $table->integer('a_pr'); // a_pr
            $table->integer('a_jml'); // a_jml
            $table->integer('a_minus_lk'); // a_minus_lk
            $table->integer('a_minus_pr'); // a_minus_pr
            $table->integer('a_minus_jml'); // a_minus_jml
            $table->integer('a_plus_lk'); // a_plus_lk
            $table->integer('a_plus_pr'); // a_plus_pr
            $table->integer('a_plus_jml'); // a_plus_jml
            $table->integer('b_lk'); // b_lk
            $table->integer('b_pr'); // b_pr
            $table->integer('b_jml'); // b_jml
            $table->integer('b_minus_lk'); // b_minus_lk
            $table->integer('b_minus_pr'); // b_minus_pr
            $table->integer('b_minus_jml'); // b_minus_jml
            $table->integer('b_plus_lk'); // b_plus_lk
            $table->integer('b_plus_pr'); // b_plus_pr
            $table->integer('b_plus_jml'); // b_plus_jml
            $table->integer('ab_lk'); // ab_lk
            $table->integer('ab_pr'); // ab_pr
            $table->integer('ab_jml'); // ab_jml
            $table->integer('ab_minus_lk'); // ab_minus_lk
            $table->integer('ab_minus_pr'); // ab_minus_pr
            $table->integer('ab_minus_jml'); // ab_minus_jml
            $table->integer('ab_plus_lk'); // ab_plus_lk
            $table->integer('ab_plus_pr'); // ab_plus_pr
            $table->integer('ab_plus_jml'); // ab_plus_jml
            $table->integer('o_lk'); // o_lk
            $table->integer('o_pr'); // o_pr
            $table->integer('o_jml'); // o_jml
            $table->integer('o_minus_lk'); // o_minus_lk
            $table->integer('o_minus_pr'); // o_minus_pr
            $table->integer('o_minus_jml'); // o_minus_jml
            $table->integer('o_plus_lk'); // o_plus_lk
            $table->integer('o_plus_pr'); // o_plus_pr
            $table->integer('o_plus_jml'); // o_plus_jml
            $table->integer('tidak_tahu_lk'); // tidak_tahu_lk
            $table->integer('tidak_tahu_pr'); // tidak_tahu_pr
            $table->integer('tidak_tahu_jml'); // tidak_tahu_jml

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goldarah');
    }
};
