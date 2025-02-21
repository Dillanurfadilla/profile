<?php

namespace App\Exports;

use App\Models\AgamaModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AgamaExport implements FromCollection, WithHeadings

{
    public function collection() 
    {
        return AgamaModel::select([
            'kode', 
            'wilayah',
            'islam_lk',
            'islam_pr',
            'islam_jml',
            'kristen_lk',
            'kristen_pr',
            'kristen_jml',
            'katholik_lk',
            'katholik_pr',
            'katholik_jml',
            'hindu_lk',
            'hindu_pr',
            'hindu_jml',
            'budha_lk',
            'budha_pr',
            'budha_jml',
            'khonghucu_lk',
            'khonghucu_pr',
            'khonghucu_jml',
            'kepercayaan_lk',
            'kepercayaan_pr',
            'kepercayaan_jml',
        ])->get();
    }

    public function headings(): array
    {
        return [
        'kode', 
        'wilayah',
        'islam_lk',
        'islam_pr',
        'islam_jml',
        'kristen_lk',
        'kristen_pr',
        'kristen_jml',
        'katholik_lk',
        'katholik_pr',
        'katholik_jml',
        'hindu_lk',
        'hindu_pr',
        'hindu_jml',
        'budha_lk',
        'budha_pr',
        'budha_jml',
        'khonghucu_lk',
        'khonghucu_pr',
        'khonghucu_jml',
        'kepercayaan_lk',
        'kepercayaan_pr',
        'kepercayaan_jml',
        ];
    }
}

