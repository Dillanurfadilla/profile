<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaaModel extends Model
{
    use HasFactory;
    protected $table = 'desaa';    
    public $timestamps = false;
    protected $fillable = 
    [
        'desas_id',
        'kecamatans_id',
        'nama_desa',
        'created_at',
        'updated_at'
    ];

}

