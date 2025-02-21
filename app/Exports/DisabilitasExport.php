<?php

namespace App\Exports;

use App\Models\DisabilitasModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DisabilitasExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return DisabilitasModel::Select([
            'kode',
            'wilayah',
            'disabilitas_fisik_lk',
            'disabilitas_fisik_pr',
            'disabilitas_fisik_jml',
            'disabilitas_fisik_dan_mental_lk',
            'disabilitas_fisik_dan_mental_pr',
            'disabilitas_fisik_dan_mental_jml',
            'disabilitas_netra_buta_lk',
            'disabilitas_netra_buta_pr',
            'disabilitas_netra_buta_jml',
            'disabilitas_mental_jiwa_lk',
            'disabilitas_mental_jiwa_pr',
            'disabilitas_mental_jiwa_jml',
            'disabilitas_rungu_wicara_lk',
            'disabilitas_rungu_wicara_pr',
            'disabilitas_rungu_wicara_jml',
            'disabilitas_lainnya_lk',
            'disabilitas_lainnya_pr',
            'disabilitas_lainnya_jml'   
            ])->get();
        }
    
        public function headings(): array
        {
            return [
                'kode',
                'wilayah',
                'disabilitas_fisik_lk',
                'disabilitas_fisik_pr',
                'disabilitas_fisik_jml',
                'disabilitas_fisik_dan_mental_lk',
                'disabilitas_fisik_dan_mental_pr',
                'disabilitas_fisik_dan_mental_jml',
                'disabilitas_netra_buta_lk',
                'disabilitas_netra_buta_pr',
                'disabilitas_netra_buta_jml',
                'disabilitas_mental_jiwa_lk',
                'disabilitas_mental_jiwa_pr',
                'disabilitas_mental_jiwa_jml',
                'disabilitas_rungu_wicara_lk',
                'disabilitas_rungu_wicara_pr',
                'disabilitas_rungu_wicara_jml',
                'disabilitas_lainnya_lk',
                'disabilitas_lainnya_pr',
                'disabilitas_lainnya_jml'  
                
            ];
        }
    
}
