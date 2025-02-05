<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KkModel extends Model
{
    use HasFactory;
    protected $table = 'kk';    
    public $timestamps = false;
    protected $fillable = 
    [
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

