<?php

namespace App\Imports;

use App\Models\KkModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;


class KkImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
         // Log untuk debugging (opsional, bisa dihapus jika tidak dibutuhkan)
         Log::info('Data yang diterima:', $row);

         // Fungsi helper untuk memeriksa apakah nilai valid angka, jika tidak, kembalikan NULL
         $getNumericValue = function($value) {
             return is_numeric($value) ? $value : null;
         };

        return new KkModel([
            'kode' => $row['kode'], // Pastikan semua data kode menjadi huruf kecil
            'wilayah' => $row['wilayah'],
            'kk_lk' => $row['kk_lk'],
            'kk_pr' => $row['kk_pr'],
            'kk_jml' => $row['kk_jml'],
            'kepemilikan_lk' => $row['kepemilikan_lk'],
            'kepemilikan_pr' => $row['kepemilikan_pr'],
            'kepemilikan_jml' => $row['kepemilikan_jml'],
            'belum_memiliki_lk' => $row['belum_memiliki_lk'],
            'belum_memiliki_pr' => $row['belum_memiliki_pr'],
            'belum_memiliki_jml' => $row['belum_memiliki_jml'],
        ]);
    }
}
