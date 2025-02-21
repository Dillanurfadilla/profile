<?php

namespace App\Exports;

use App\Models\PendidikanModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PendidikanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return PendidikanModel::Select([
            'kode',
        'wilayah',
        'tidak_belum_sekolah_lk',
        'tidak_belum_sekolah_pr',
        'tidak_belum_sekolah_jml',
        'belum_tamat_sd_sederajat_lk',
        'belum_tamat_sd_sederajat_pr',
        'belum_tamat_sd_sederajat_jml',
        'tamat_sd_sederajat_lk',
        'tamat_sd_sederajat_pr',
        'tamat_sd_sederajat_jml',
        'sltp_sederajat_lk',
        'sltp_sederajat_pr',
        'sltp_sederajat_jml',
        'slta_sederajat_lk',
        'slta_sederajat_pr',
        'slta_sederajat_jml',
        'diploma_i_ii_lk',
        'diploma_i_ii_pr',
        'diploma_i_ii_jml',
        'akademi_diploma_iii_smuda_lk',
        'akademi_diploma_iii_smuda_pr',
        'akademi_diploma_iii_smuda_jml',
        'diploma_iv_strata_i_lk',
        'diploma_iv_strata_i_pr',
        'diploma_iv_strata_i_jml',
        'strata_ii_lk',
        'strata_ii_pr',
        'strata_ii_jml',
        'strata_iii_lk',
        'strata_iii_pr',
        'strata_iii_jml',

            ])->get();
        }
    
        public function headings(): array
        {
            return [
                'kode',
        'wilayah',
        'tidak_belum_sekolah_lk',
        'tidak_belum_sekolah_pr',
        'tidak_belum_sekolah_jml',
        'belum_tamat_sd_sederajat_lk',
        'belum_tamat_sd_sederajat_pr',
        'belum_tamat_sd_sederajat_jml',
        'tamat_sd_sederajat_lk',
        'tamat_sd_sederajat_pr',
        'tamat_sd_sederajat_jml',
        'sltp_sederajat_lk',
        'sltp_sederajat_pr',
        'sltp_sederajat_jml',
        'slta_sederajat_lk',
        'slta_sederajat_pr',
        'slta_sederajat_jml',
        'diploma_i_ii_lk',
        'diploma_i_ii_pr',
        'diploma_i_ii_jml',
        'akademi_diploma_iii_smuda_lk',
        'akademi_diploma_iii_smuda_pr',
        'akademi_diploma_iii_smuda_jml',
        'diploma_iv_strata_i_lk',
        'diploma_iv_strata_i_pr',
        'diploma_iv_strata_i_jml',
        'strata_ii_lk',
        'strata_ii_pr',
        'strata_ii_jml',
        'strata_iii_lk',
        'strata_iii_pr',
        'strata_iii_jml',

            ];
        }
}
