<?php

namespace App\Exports;

use App\Models\KkModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class KkExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return KkModel::Select([
            'kode',
            'wilayah',
            'kk_lk',
            'kk_pr',
            'kk_jml',
            'kepemilikan_lk',
            'kepemilikan_pr',
            'kepemilikan_jml',
            'belum_memiliki_lk',
            'belum_memiliki_pr',
            'belum_memiliki_jml',
            ])->get();
        }
    
        public function headings(): array
        {
            return [
                'kode',
                'wilayah',
                'kk_lk',
                'kk_pr',
                'kk_jml',
                'kepemilikan_lk',
                'kepemilikan_pr',
                'kepemilikan_jml',
                'belum_memiliki_lk',
                'belum_memiliki_pr',
                'belum_memiliki_jml',
            ];
        }
    
}
