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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 50); // kolom kode wilayah
            $table->string('wilayah'); // kolom untuk wilayah
            $table->string('tidak_belum_sekolah_lk'); // kolom untuk "tidak/belum sekolah (lk)"
            $table->string('tidak_belum_sekolah_pr'); // kolom untuk "tidak/belum sekolah (pr)"
            $table->string('tidak_belum_sekolah_jml'); // kolom untuk "tidak/belum sekolah (jml)"
            $table->string('belum_tamat_sd_sederajat_lk'); // kolom untuk "belum tamat sd/sederajat (lk)"
            $table->string('belum_tamat_sd_sederajat_pr'); // kolom untuk "belum tamat sd/sederajat (pr)"
            $table->string('belum_tamat_sd_sederajat_jml'); // kolom untuk "belum tamat sd/sederajat (jml)"
            $table->string('tamat_sd_sederajat_lk'); // kolom untuk "tamat sd/sederajat (lk)"
            $table->string('tamat_sd_sederajat_pr'); // kolom untuk "tamat sd/sederajat (pr)"
            $table->string('tamat_sd_sederajat_jml'); // kolom untuk "tamat sd/sederajat (jml)"
            $table->string('sltp_sederajat_lk'); // kolom untuk "sltp/sederajat (lk)"
            $table->string('sltp_sederajat_pr'); // kolom untuk "sltp/sederajat (pr)"
            $table->string('sltp_sederajat_jml'); // kolom untuk "sltp/sederajat (jml)"
            $table->string('slta_sederajat_lk'); // kolom untuk "slta/sederajat (lk)"
            $table->string('slta_sederajat_pr'); // kolom untuk "slta/sederajat (pr)"
            $table->string('slta_sederajat_jml'); // kolom untuk "slta/sederajat (jml)"
            $table->string('diploma_i_ii_lk'); // kolom untuk "diploma i/ii (lk)"
            $table->string('diploma_i_ii_pr'); // kolom untuk "diploma i/ii (pr)"
            $table->string('diploma_i_ii_jml'); // kolom untuk "diploma i/ii (jml)"
            $table->string('akademi_diploma_iii_smuda_lk'); // kolom untuk "akademi/diploma iii/s.muda (lk)"
            $table->string('akademi_diploma_iii_smuda_pr'); // kolom untuk "akademi/diploma iii/s.muda (pr)"
            $table->string('akademi_diploma_iii_smuda_jml'); // kolom untuk "akademi/diploma iii/s.muda (jml)"
            $table->string('diploma_iv_strata_i_lk'); // kolom untuk "diploma iv/strata i (lk)"
            $table->string('diploma_iv_strata_i_pr'); // kolom untuk "diploma iv/strata i (pr)"
            $table->string('diploma_iv_strata_i_jml'); // kolom untuk "diploma iv/strata i (jml)"
            $table->string('strata_ii_lk'); // kolom untuk "strata ii (lk)"
            $table->string('strata_ii_pr'); // kolom untuk "strata ii (pr)"
            $table->string('strata_ii_jml'); // kolom untuk "strata ii (jml)"
            $table->string('strata_iii_lk'); // kolom untuk "strata iii (lk)"
            $table->string('strata_iii_pr'); // kolom untuk "strata iii (pr)"
            $table->string('strata_iii_jml'); // kolom untuk "strata iii (jml)"
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
