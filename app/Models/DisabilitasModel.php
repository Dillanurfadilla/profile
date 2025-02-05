<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisabilitasModel extends Model
{
    use HasFactory;
    protected $table = 'disabilitas';    
    public $timestamps = true;
    protected $fillable =
    ['kode',
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

