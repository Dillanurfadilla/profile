<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluarga';    
    public $timestamps = false;
    protected $fillable = 
    [
        'dkb',
        'tahun',
        'kecamatans_id',
        'desas_id',
        'agama',
        'disabilitas',
        'golongan_darah',
        'kepemilikan_kk',
        'pekerjaan',
        'pendidikan',
        'status_kawin',
        'umur_tunggal',

    ];
}

