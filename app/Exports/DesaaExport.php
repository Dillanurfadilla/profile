<?php

namespace App\Exports;

use App\Models\DesaaModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DesaaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return DesaaModel::Select([
        'desas_id',
        'kecamatans_id',
        'nama_desa',
        
        ])->get();
    }

    public function headings(): array
    {
        return [
        'desas_id',
        'kecamatans_id',
        'nama_desa',
        
        ];
    }
}
