<?php

namespace App\Exports;

use App\Models\GoldarahModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class GoldarahExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return GoldarahModel::Select([
            'kode',
        'wilayah',
        'a_lk',
        'a_pr',
        'a_jml',
        'a_minus_lk',
        'a_minus_pr',
        'a_minus_jml',
        'a_plus_lk',
        'a_plus_pr',
        'a_plus_jml',
        'b_lk',
        'b_pr',
        'b_jml',
        'b_minus_lk',
        'b_minus_pr',
        'b_minus_jml',
        'b_plus_lk',
        'b_plus_pr',
        'b_plus_jml',
        'ab_lk',
        'ab_pr',
        'ab_jml',
        'ab_minus_lk',
        'ab_minus_pr',
        'ab_minus_jml',
        'ab_plus_lk',
        'ab_plus_pr',
        'ab_plus_jml',
        'o_lk',
        'o_pr',
        'o_jml',
        'o_minus_lk',
        'o_minus_pr',
        'o_minus_jml',
        'o_plus_lk',
        'o_plus_pr',
        'o_plus_jml',
        'tidak_tahu_lk',
        'tidak_tahu_pr',
        'tidak_tahu_jml',
            ])->get();
        }
    
        public function headings(): array
        {
            return [
                'kode',
        'wilayah',
        'a_lk',
        'a_pr',
        'a_jml',
        'a_minus_lk',
        'a_minus_pr',
        'a_minus_jml',
        'a_plus_lk',
        'a_plus_pr',
        'a_plus_jml',
        'b_lk',
        'b_pr',
        'b_jml',
        'b_minus_lk',
        'b_minus_pr',
        'b_minus_jml',
        'b_plus_lk',
        'b_plus_pr',
        'b_plus_jml',
        'ab_lk',
        'ab_pr',
        'ab_jml',
        'ab_minus_lk',
        'ab_minus_pr',
        'ab_minus_jml',
        'ab_plus_lk',
        'ab_plus_pr',
        'ab_plus_jml',
        'o_lk',
        'o_pr',
        'o_jml',
        'o_minus_lk',
        'o_minus_pr',
        'o_minus_jml',
        'o_plus_lk',
        'o_plus_pr',
        'o_plus_jml',
        'tidak_tahu_lk',
        'tidak_tahu_pr',
        'tidak_tahu_jml',
            ];
        }
    
}
