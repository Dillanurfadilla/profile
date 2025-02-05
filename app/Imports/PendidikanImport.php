<?php

namespace App\Imports;

use App\Models\PendidikanModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendidikanImport implements ToModel, WithHeadingRow

{
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
    
        return new PendidikanModel([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],  
            'tidak_belum_sekolah_lk' => $row['tidak_belum_sekolah_lk'],
            'tidak_belum_sekolah_pr' => $row['tidak_belum_sekolah_pr'],
            'tidak_belum_sekolah_jml' => $row['tidak_belum_sekolah_jml'],
            'belum_tamat_sd_sederajat_lk' => $row['belum_tamat_sd_sederajat_lk'],
            'belum_tamat_sd_sederajat_pr' => $row['belum_tamat_sd_sederajat_pr'],
            'belum_tamat_sd_sederajat_jml' => $row['belum_tamat_sd_sederajat_jml'],
            'tamat_sd_sederajat_lk' => $row['tamat_sd_sederajat_lk'],
            'tamat_sd_sederajat_pr' => $row['tamat_sd_sederajat_pr'],
            'tamat_sd_sederajat_jml' => $row['tamat_sd_sederajat_jml'],
            'sltp_sederajat_lk' => $row['sltp_sederajat_lk'],
            'sltp_sederajat_pr' => $row['sltp_sederajat_pr'],
            'sltp_sederajat_jml' => $row['sltp_sederajat_jml'],
            'slta_sederajat_lk' => $row['slta_sederajat_lk'],
            'slta_sederajat_pr' => $row['slta_sederajat_pr'],
            'slta_sederajat_jml' => $row['slta_sederajat_jml'],
            'diploma_i_ii_lk' => $row['diploma_i_ii_lk'],
            'diploma_i_ii_pr' => $row['diploma_i_ii_pr'],
            'diploma_i_ii_jml' => $row['diploma_i_ii_jml'],
            'akademi_diploma_iii_smuda_lk' => $row['akademi_diploma_iii_smuda_lk'],
            'akademi_diploma_iii_smuda_pr' => $row['akademi_diploma_iii_smuda_pr'],
            'akademi_diploma_iii_smuda_jml' => $row['akademi_diploma_iii_smuda_jml'],
            'diploma_iv_strata_i_lk' => $row['diploma_iv_strata_i_lk'],
            'diploma_iv_strata_i_pr' => $row['diploma_iv_strata_i_pr'],
            'diploma_iv_strata_i_jml' => $row['diploma_iv_strata_i_jml'],
            'strata_ii_lk' => $row['strata_ii_lk'],
            'strata_ii_pr' => $row['strata_ii_pr'],
            'strata_ii_jml' => $row['strata_ii_jml'],
            'strata_iii_lk' => $row['strata_iii_lk'],
            'strata_iii_pr' => $row['strata_iii_pr'],
            'strata_iii_jml' => $row['strata_iii_jml'],
            ]);
    }
}

