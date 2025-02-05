<?php

namespace App\Imports;

use App\Models\DesaaModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DesaaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        
        return new DesaaModel([
            'desas_id'       => $row['desas_id'], // Sesuaikan dengan header file Excel
            'kecamatans_id'  => $row['kecamatans_id'], // Sesuaikan dengan header file Excel
            'nama_desa'      => $row['nama_desa'], // Sesuaikan dengan header file Excel
        ]);
    }
}