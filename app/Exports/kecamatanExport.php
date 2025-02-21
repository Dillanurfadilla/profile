<?php

namespace App\Exports;

use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class kecamatanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Kecamatan::Select([
            'nama_kecamatan'
            ])->get();
        }
    
        public function headings(): array
        {
            return [
                'nama_kecamatan'
            ];
        }
    
}
