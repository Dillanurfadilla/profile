<?php

namespace App\Imports;

use App\Models\AgamaModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AgamaImport implements ToModel, WithHeadingRow

{
    public function model(array $row)
    {
         
        return new AgamaModel([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'islam_lk' => $row['islam_lk'],
            'islam_pr' => $row['islam_pr'],
            'islam_jml' => $row['islam_jml'],
            'kristen_lk' => $row['kristen_lk'],
            'kristen_pr' => $row['kristen_pr'],
            'kristen_jml' => $row['kristen_jml'],
            'katholik_lk' => $row['katholik_lk'],
            'katholik_pr' => $row['katholik_pr'],
            'katholik_jml' => $row['katholik_jml'],
            'hindu_lk' => $row['hindu_lk'],
            'hindu_pr' => $row['hindu_pr'],
            'hindu_jml' => $row['hindu_jml'],
            'budha_lk' => $row['budha_lk'],
            'budha_pr' => $row['budha_pr'],
            'budha_jml' => $row['budha_jml'],
            'khonghucu_lk' => $row['khonghucu_lk'],
            'khonghucu_pr' => $row['khonghucu_pr'],
            'khonghucu_jml' => $row['khonghucu_jml'],
            'kepercayaan_lk' => $row['kepercayaan_lk'],
            'kepercayaan_pr' => $row['kepercayaan_pr'],
            'kepercayaan_jml' => $row['kepercayaan_jml'],
            ]);
    }
}

