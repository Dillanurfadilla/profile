<?php

namespace App\Exports;

use App\Models\StatuskawinModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class StatuskawinExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return StatuskawinModel::Select([
        'kode',
        'wilayah',
        'belum_kawin_lk',
        'belum_kawin_pr',
        'belum_kawin_jml',
        'kawin_lk',
        'kawin_pr',
        'kawin_jml',
        'cerai_hidup_lk',
        'cerai_hidup_pr',
        'cerai_hidup_jml',
        'cerai_mati_lk',
        'cerai_mati_pr',
        'cerai_mati_jml',

            ])->get();
        }
    
        public function headings(): array
        {
            return [
        'kode',
        'wilayah',
        'belum_kawin_lk',
        'belum_kawin_pr',
        'belum_kawin_jml',
        'kawin_lk',
        'kawin_pr',
        'kawin_jml',
        'cerai_hidup_lk',
        'cerai_hidup_pr',
        'cerai_hidup_jml',
        'cerai_mati_lk',
        'cerai_mati_pr',
        'cerai_mati_jml',

            ];
        }
}
