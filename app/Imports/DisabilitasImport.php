<?php

namespace App\Imports;

use App\Models\DisabilitasModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class DisabilitasImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new DisabilitasModel([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'disabilitas_fisik_lk' => $row['disabilitas_fisik_lk'],
            'disabilitas_fisik_pr' => $row['disabilitas_fisik_pr'],
            'disabilitas_fisik_jml' => $row['disabilitas_fisik_jml'],
            'disabilitas_fisik_dan_mental_lk' => $row['disabilitas_fisik_dan_mental_lk'],
            'disabilitas_fisik_dan_mental_pr' => $row['disabilitas_fisik_dan_mental_pr'],
            'disabilitas_fisik_dan_mental_jml' => $row['disabilitas_fisik_dan_mental_jml'],
            'disabilitas_netra_buta_lk' => $row['disabilitas_netra_buta_lk'],
            'disabilitas_netra_buta_pr' => $row['disabilitas_netra_buta_pr'],
            'disabilitas_netra_buta_jml' => $row['disabilitas_netra_buta_jml'],
            'disabilitas_mental_jiwa_lk' => $row['disabilitas_mental_jiwa_lk'],
            'disabilitas_mental_jiwa_pr' => $row['disabilitas_mental_jiwa_pr'],
            'disabilitas_mental_jiwa_jml' => $row['disabilitas_mental_jiwa_jml'],
            'disabilitas_rungu_wicara_lk' => $row['disabilitas_rungu_wicara_lk'],
            'disabilitas_rungu_wicara_pr' => $row['disabilitas_rungu_wicara_pr'],
            'disabilitas_rungu_wicara_jml' => $row['disabilitas_rungu_wicara_jml'],
            'disabilitas_lainnya_lk' => $row['disabilitas_lainnya_lk'],
            'disabilitas_lainnya_pr' => $row['disabilitas_lainnya_pr'],
            'disabilitas_lainnya_jml' => $row['disabilitas_lainnya_jml'],
       ]);
    }
}
