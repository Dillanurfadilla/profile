<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatuskawinModel extends Model
{
    use HasFactory;
    protected $table = 'statuskawin';    
    public $timestamps = false;
    protected $fillable = 
    [
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

