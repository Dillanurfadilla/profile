<?php

namespace App\Imports;

use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class KecamatanImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
    
        return new Kecamatan([
            'nama_kecamatan' => $row['nama_kecamatan'], 
        ]);
    }
}

