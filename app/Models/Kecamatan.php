<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';    
    protected $fillable = ['nama_kecamatan' ,'created_at','updated_at'];

    // Pastikan timestamps diaktifkan
    public $timestamps = true; // Ini adalah default, jadi bisa dihilangkan jika tidak perlu

}
