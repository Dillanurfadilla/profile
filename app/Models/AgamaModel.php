<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgamaModel extends Model
{
    use HasFactory;
    protected $table = 'agama';    
    public $timestamps = false;
    protected $fillable = 
    [
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

