<?php

namespace App\Imports;

use App\Models\GoldarahModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;


class GoldarahImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Log untuk debugging (opsional, bisa dihapus jika tidak dibutuhkan)
        Log::info('Data yang diterima:', $row);

        // Fungsi helper untuk memeriksa apakah nilai valid angka, jika tidak, kembalikan NULL
        $getNumericValue = function($value) {
            return is_numeric($value) ? $value : null;
        };

        return new GoldarahModel([
            'kode' => $row['kode'], 
            'wilayah' => $row['wilayah'], 
            'a_lk' => $row['a_lk'], 
            'a_pr' => $row['a_pr'], 
            'a_jml' => $row['a_jml'], 
            'a_minus_lk' => $row['a_minus_lk'], 
            'a_minus_pr' => $row['a_minus_pr'], 
            'a_minus_jml' => $row['a_minus_jml'], 
            'a_plus_lk' => $row['a_plus_lk'], 
            'a_plus_pr' => $row['a_plus_pr'], 
            'a_plus_jml' => $row['a_plus_jml'], 
            'b_lk' => $row['b_lk'], 
            'b_pr' => $row['b_pr'], 
            'b_jml' => $row['b_jml'], 
            'b_minus_lk' => $row['b_minus_lk'], 
            'b_minus_pr' => $row['b_minus_pr'], 
            'b_minus_jml' => $row['b_minus_jml'], 
            'b_plus_lk' => $row['b_plus_lk'], 
            'b_plus_pr' => $row['b_plus_pr'], 
            'b_plus_jml' => $row['b_plus_jml'], 
            'ab_lk' => $row['ab_lk'], 
            'ab_pr' => $row['ab_pr'], 
            'ab_jml' => $row['ab_jml'], 
            'ab_minus_lk' => $row['ab_minus_lk'], 
            'ab_minus_pr' => $row['ab_minus_pr'], 
            'ab_minus_jml' => $row['ab_minus_jml'], 
            'ab_plus_lk' => $row['ab_plus_lk'], 
            'ab_plus_pr' => $row['ab_plus_pr'], 
            'ab_plus_jml' => $row['ab_plus_jml'], 
            'o_lk' => $row['o_lk'], 
            'o_pr' => $row['o_pr'], 
            'o_jml' => $row['o_jml'], 
            'o_minus_lk' => $row['o_minus_lk'], 
            'o_minus_pr' => $row['o_minus_pr'], 
            'o_minus_jml' => $row['o_minus_jml'], 
            'o_plus_lk' => $row['o_plus_lk'], 
            'o_plus_pr' => $row['o_plus_pr'], 
            'o_plus_jml' => $row['o_plus_jml'], 
            'tidak_tahu_lk' => $row['tidak_tahu_lk'], 
            'tidak_tahu_pr' => $row['tidak_tahu_pr'], 
            'tidak_tahu_jml' => $row['tidak_tahu_jml']

          ]);

    }
}
