<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\StatuskawinModel;

class StatuskawinImport implements ToModel, WithHeadingRow
{
   
    public function model(array $row)
    {
        return new StatuskawinModel([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'belum_kawin_lk' => $row['belum_kawin_lk'],
            'belum_kawin_pr' => $row['belum_kawin_pr'],
            'belum_kawin_jml' => $row['belum_kawin_jml'],
            'kawin_lk' => $row['kawin_lk'],
            'kawin_pr' => $row['kawin_pr'],
            'kawin_jml' => $row['kawin_jml'],
            'cerai_hidup_lk' => $row['cerai_hidup_lk'],
            'cerai_hidup_pr' => $row['cerai_hidup_pr'],
            'cerai_hidup_jml' => $row['cerai_hidup_jml'],
            'cerai_mati_lk' => $row['cerai_mati_lk'],
            'cerai_mati_pr' => $row['cerai_mati_pr'],
            'cerai_mati_jml' => $row['cerai_mati_jml'],
        ]);
    }
}
