<?php


namespace App\Http\Controllers;

use App\Models\UmurModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UmurImport;
use App\Exports\UmurExport;
use Session;

class UmurController extends Controller
{

    public function index(Request $request) : view
    {
        $umur = UmurModel::all(); // Mendapatkan semua data
        return view('umur.index', compact('umur'));
    }

    public function create() : view
    {
        return view('umur.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'nol_tahun_lk' => 'required',
          'nol_tahun_pr' => 'required',
          'satu_tahun_lk' => 'required',
          'satu_tahun_pr' => 'required',
          'dua_tahun_lk' => 'required',
          'dua_tahun_pr' => 'required',
          'tiga_tahun_lk' => 'required',
          'tiga_tahun_pr' => 'required',
          'empat_tahun_lk' => 'required',
          'empat_tahun_pr' => 'required',
          'lima_tahun_lk' => 'required',
          'lima_tahun_pr' => 'required',
          'enam_tahun_lk' => 'required',
          'enam_tahun_pr' => 'required',
          'tujuh_tahun_lk' => 'required',
          'tujuh_tahun_pr' => 'required',
          'delapan_tahun_lk' => 'required',
          'delapan_tahun_pr' => 'required',
          'sembilan_tahun_lk' => 'required',
          'sembilan_tahun_pr' => 'required',
          'sepuluh_tahun_lk' => 'required',
          'sepuluh_tahun_pr' => 'required',
          'sebelas_tahun_lk' => 'required',
          'sebelas_tahun_pr' => 'required',
          'dua_belas_tahun_lk' => 'required',
          'dua_belas_tahun_pr' => 'required',
          'tiga_belas_tahun_lk' => 'required',
          'tiga_belas_tahun_pr' => 'required',
          'empat_belas_tahun_lk' => 'required',
          'empat_belas_tahun_pr' => 'required',
          'lima_belas_tahun_lk' => 'required',
          'lima_belas_tahun_pr' => 'required',
          'enam_belas_tahun_lk' => 'required',
          'enam_belas_tahun_pr' => 'required',
          'tujuh_belas_tahun_lk' => 'required',
          'tujuh_belas_tahun_pr' => 'required',
          'delapan_belas_tahun_lk' => 'required',
          'delapan_belas_tahun_pr' => 'required',
          'sembilan_belas_tahun_lk' => 'required',
          'sembilan_belas_tahun_pr' => 'required',
          'dua_puluh_tahun_lk' => 'required',
          'dua_puluh_tahun_pr' => 'required',
          'dua_puluh_satu_tahun_lk' => 'required',
          'dua_puluh_satu_tahun_pr' => 'required',
          'dua_puluh_dua_tahun_lk' => 'required',
          'dua_puluh_dua_tahun_pr' => 'required',
          'dua_puluh_tiga_tahun_lk' => 'required',
          'dua_puluh_tiga_tahun_pr' => 'required',
          'dua_puluh_empat_tahun_lk' => 'required',
          'dua_puluh_empat_tahun_pr' => 'required',
          'dua_puluh_lima_tahun_lk' => 'required',
          'dua_puluh_lima_tahun_pr' => 'required',
          'dua_puluh_enam_tahun_lk' => 'required',
          'dua_puluh_enam_tahun_pr' => 'required',
          'dua_puluh_tujuh_tahun_lk' => 'required',
          'dua_puluh_tujuh_tahun_pr' => 'required',
          'dua_puluh_delapan_tahun_lk' => 'required',
          'dua_puluh_delapan_tahun_pr' => 'required',
          'dua_puluh_sembilan_tahun_lk' => 'required',
          'dua_puluh_sembilan_tahun_pr' => 'required',
          'tiga_puluh_tahun_lk' => 'required',
          'tiga_puluh_tahun_pr' => 'required',
          'tiga_puluh_satu_tahun_lk' => 'required',
          'tiga_puluh_satu_tahun_pr' => 'required',
          'tiga_puluh_dua_tahun_lk' => 'required',
          'tiga_puluh_dua_tahun_pr' => 'required',
          'tiga_puluh_tiga_tahun_lk' => 'required',
          'tiga_puluh_tiga_tahun_pr' => 'required',
          'tiga_puluh_empat_tahun_lk' => 'required',
          'tiga_puluh_empat_tahun_pr' => 'required',
          'tiga_puluh_lima_tahun_lk' => 'required',
          'tiga_puluh_lima_tahun_pr' => 'required',
          'tiga_puluh_enam_tahun_lk' => 'required',
          'tiga_puluh_enam_tahun_pr' => 'required',
          'tiga_puluh_tujuh_tahun_lk' => 'required',
          'tiga_puluh_tujuh_tahun_pr' => 'required',
          'tiga_puluh_delapan_tahun_lk' => 'required',
          'tiga_puluh_delapan_tahun_pr' => 'required',
          'tiga_puluh_sembilan_tahun_lk' => 'required',
          'tiga_puluh_sembilan_tahun_pr' => 'required',
          'empat_puluh_tahun_lk' => 'required',
          'empat_puluh_tahun_pr' => 'required',
          'empat_puluh_satu_tahun_lk' => 'required',
          'empat_puluh_satu_tahun_pr' => 'required',
          'empat_puluh_dua_tahun_lk' => 'required',
          'empat_puluh_dua_tahun_pr' => 'required',
          'empat_puluh_tiga_tahun_lk' => 'required',
          'empat_puluh_tiga_tahun_pr' => 'required',
          'empat_puluh_empat_tahun_lk' => 'required',
          'empat_puluh_empat_tahun_pr' => 'required',
          'empat_puluh_lima_tahun_lk' => 'required',
          'empat_puluh_lima_tahun_pr' => 'required',
          'empat_puluh_enam_tahun_lk' => 'required',
          'empat_puluh_enam_tahun_pr' => 'required',
          'empat_puluh_tujuh_tahun_lk' => 'required',
          'empat_puluh_tujuh_tahun_pr' => 'required',
          'empat_puluh_delapan_tahun_lk' => 'required',
          'empat_puluh_delapan_tahun_pr' => 'required',
          'empat_puluh_sembilan_tahun_lk' => 'required',
          'empat_puluh_sembilan_tahun_pr' => 'required',
          'lima_puluh_tahun_lk' => 'required',
          'lima_puluh_tahun_pr' => 'required',
          'lima_puluh_satu_tahun_lk' => 'required',
          'lima_puluh_satu_tahun_pr' => 'required',
          'lima_puluh_dua_tahun_lk' => 'required',
          'lima_puluh_dua_tahun_pr' => 'required',
          'lima_puluh_tiga_tahun_lk' => 'required',
          'lima_puluh_tiga_tahun_pr' => 'required',
          'lima_puluh_empat_tahun_lk' => 'required',
          'lima_puluh_empat_tahun_pr' => 'required',
          'lima_puluh_lima_tahun_lk' => 'required',
          'lima_puluh_lima_tahun_pr' => 'required',
          'lima_puluh_enam_tahun_lk' => 'required',
          'lima_puluh_enam_tahun_pr' => 'required',
          'lima_puluh_tujuh_tahun_lk' => 'required',
          'lima_puluh_tujuh_tahun_pr' => 'required',
          'lima_puluh_delapan_tahun_lk' => 'required',
          'lima_puluh_delapan_tahun_pr' => 'required',
          'lima_puluh_sembilan_tahun_lk' => 'required',
          'lima_puluh_sembilan_tahun_pr' => 'required',
          'enam_puluh_tahun_lk' => 'required',
          'enam_puluh_tahun_pr' => 'required',
          'enam_puluh_satu_tahun_lk' => 'required',
          'enam_puluh_satu_tahun_pr' => 'required',
          'enam_puluh_dua_tahun_lk' => 'required',
          'enam_puluh_dua_tahun_pr' => 'required',
          'enam_puluh_tiga_tahun_lk' => 'required',
          'enam_puluh_tiga_tahun_pr' => 'required',
          'enam_puluh_empat_tahun_lk' => 'required',
          'enam_puluh_empat_tahun_pr' => 'required',
          'enam_puluh_lima_tahun_lk' => 'required',
          'enam_puluh_lima_tahun_pr' => 'required',
          'enam_puluh_enam_tahun_lk' => 'required',
          'enam_puluh_enam_tahun_pr' => 'required',
          'enam_puluh_tujuh_tahun_lk' => 'required',
          'enam_puluh_tujuh_tahun_pr' => 'required',
          'enam_puluh_delapan_tahun_lk' => 'required',
          'enam_puluh_delapan_tahun_pr' => 'required',
          'enam_puluh_sembilan_tahun_lk' => 'required',
          'enam_puluh_sembilan_tahun_pr' => 'required',
          'tujuh_puluh_tahun_lk' => 'required',
          'tujuh_puluh_tahun_pr' => 'required',
          'tujuh_puluh_satu_tahun_lk' => 'required',
          'tujuh_puluh_satu_tahun_pr' => 'required',
          'tujuh_puluh_dua_tahun_lk' => 'required',
          'tujuh_puluh_dua_tahun_pr' => 'required',
          'tujuh_puluh_tiga_tahun_lk' => 'required',
          'tujuh_puluh_tiga_tahun_pr' => 'required',
          'tujuh_puluh_empat_tahun_lk' => 'required',
          'tujuh_puluh_empat_tahun_pr' => 'required',
          'tujuh_puluh_lima_tahun_lk' => 'required',
          'tujuh_puluh_lima_tahun_pr' => 'required',
          'tujuh_puluh_enam_tahun_lk' => 'required',
          'tujuh_puluh_enam_tahun_pr' => 'required',
          'tujuh_puluh_tujuh_tahun_lk' => 'required',
          'tujuh_puluh_tujuh_tahun_pr' => 'required',
          'tujuh_puluh_delapan_tahun_lk' => 'required',
          'tujuh_puluh_delapan_tahun_pr' => 'required',
          'tujuh_puluh_sembilan_tahun_lk' => 'required',
          'tujuh_puluh_sembilan_tahun_pr' => 'required',
          'delapan_puluh_tahun_lk' => 'required',
          'delapan_puluh_tahun_pr' => 'required',
          'delapan_puluh_satu_tahun_lk' => 'required',
          'delapan_puluh_satu_tahun_pr' => 'required',
          'delapan_puluh_dua_tahun_lk' => 'required',
          'delapan_puluh_dua_tahun_pr' => 'required',
          'delapan_puluh_tiga_tahun_lk' => 'required',
          'delapan_puluh_tiga_tahun_pr' => 'required',
          'delapan_puluh_empat_tahun_lk' => 'required',
          'delapan_puluh_empat_tahun_pr' => 'required',
          'delapan_puluh_lima_tahun_lk' => 'required',
          'delapan_puluh_lima_tahun_pr' => 'required',
          'delapan_puluh_enam_tahun_lk' => 'required',
          'delapan_puluh_enam_tahun_pr' => 'required',
          'delapan_puluh_tujuh_tahun_lk' => 'required',
          'delapan_puluh_tujuh_tahun_pr' => 'required',
          'delapan_puluh_delapan_tahun_lk' => 'required',
          'delapan_puluh_delapan_tahun_pr' => 'required',
          'delapan_puluh_sembilan_tahun_lk' => 'required',
          'delapan_puluh_sembilan_tahun_pr' => 'required',
          'sembilan_puluh_tahun_lk' => 'required',
          'sembilan_puluh_tahun_pr' => 'required',
          'sembilan_puluh_satu_tahun_lk' => 'required',
          'sembilan_puluh_satu_tahun_pr' => 'required',
          'sembilan_puluh_dua_tahun_lk' => 'required',
          'sembilan_puluh_dua_tahun_pr' => 'required',
          'sembilan_puluh_tiga_tahun_lk' => 'required',
          'sembilan_puluh_tiga_tahun_pr' => 'required',
          'sembilan_puluh_empat_tahun_lk' => 'required',
          'sembilan_puluh_empat_tahun_pr' => 'required',
          'seratus_tahun_lk' => 'required',
          'seratus_tahun_pr' => 'required',
          'seratus_satu_tahun_lk' => 'required',
          'seratus_satu_tahun_pr' => 'required',
          'seratus_dua_tahun_lk' => 'required',
          'seratus_dua_tahun_pr' => 'required',
          'seratus_tiga_tahun_lk' => 'required',
          'seratus_tiga_tahun_pr' => 'required',
          'seratus_empat_tahun_lk' => 'required',
          'seratus_empat_tahun_pr' => 'required',
          'seratus_lima_tahun_lk' => 'required',
          'seratus_lima_tahun_pr' => 'required',
          'seratus_enam_tahun_lk' => 'required',
          'seratus_enam_tahun_pr' => 'required',
          'seratus_tujuh_tahun_lk' => 'required',
          'seratus_tujuh_tahun_pr' => 'required',
          'seratus_delapan_tahun_lk' => 'required',
          'seratus_delapan_tahun_pr' => 'required',
          'seratus_sembilan_tahun_lk' => 'required',
          'seratus_sembilan_tahun_pr' => 'required',
          'seratus_sepuluh_tahun_lk' => 'required',
          'seratus_sepuluh_tahun_pr' => 'required',
          'seratus_sebelas_tahun_lk' => 'required',
          'seratus_sebelas_tahun_pr' => 'required',
          'seratus_dua_belas_tahun_lk' => 'required',
          'seratus_dua_belas_tahun_pr' => 'required',
          'seratus_tiga_belas_tahun_lk' => 'required',
          'seratus_tiga_belas_tahun_pr' => 'required',
          'seratus_empat_belas_tahun_lk' => 'required',
          'seratus_empat_belas_tahun_pr' => 'required',
          'seratus_lima_belas_tahun_lk' => 'required',
          'seratus_lima_belas_tahun_pr' => 'required',
          'seratus_enam_belas_tahun_lk' => 'required',
          'seratus_enam_belas_tahun_pr' => 'required',
          'seratus_tujuh_belas_tahun_lk' => 'required',
          'seratus_tujuh_belas_tahun_pr' => 'required',
          'seratus_delapan_belas_tahun_lk' => 'required',
          'seratus_delapan_belas_tahun_pr' => 'required',
          'seratus_sembilan_belas_tahun_lk' => 'required',
          'seratus_sembilan_belas_tahun_pr' => 'required',
          'seratus_dua_puluh_tahun_lk' => 'required',
          'seratus_dua_puluh_tahun_pr' => 'required',
          'seratus_dua_puluh_satu_tahun_lk' => 'required',
          'seratus_dua_puluh_satu_tahun_pr' => 'required',

        ]);


        $umur = new UmurModel; 
        $umur->kode = $request->kode;
        $umur->wilayah = $request->wilayah;
        $umur->nol_tahun_lk = $request->nol_tahun_lk;
        $umur->nol_tahun_pr = $request->nol_tahun_pr;
        $umur->satu_tahun_lk = $request->satu_tahun_lk;
        $umur->satu_tahun_pr = $request->satu_tahun_pr;
        $umur->dua_tahun_lk = $request->dua_tahun_lk;
        $umur->dua_tahun_pr = $request->dua_tahun_pr;
        $umur->tiga_tahun_lk = $request->tiga_tahun_lk;
        $umur->tiga_tahun_pr = $request->tiga_tahun_pr;
        $umur->empat_tahun_lk = $request->empat_tahun_lk;
        $umur->empat_tahun_pr = $request->empat_tahun_pr;
        $umur->lima_tahun_lk = $request->lima_tahun_lk;
        $umur->lima_tahun_pr = $request->lima_tahun_pr;
        $umur->enam_tahun_lk = $request->enam_tahun_lk;
        $umur->enam_tahun_pr = $request->enam_tahun_pr;
        $umur->tujuh_tahun_lk = $request->tujuh_tahun_lk;
        $umur->tujuh_tahun_pr = $request->tujuh_tahun_pr;
        $umur->delapan_tahun_lk = $request->delapan_tahun_lk;
        $umur->delapan_tahun_pr = $request->delapan_tahun_pr;
        $umur->sembilan_tahun_lk = $request->sembilan_tahun_lk;
        $umur->sembilan_tahun_pr = $request->sembilan_tahun_pr;
        $umur->sepuluh_tahun_lk = $request->sepuluh_tahun_lk;
        $umur->sepuluh_tahun_pr = $request->sepuluh_tahun_pr;
        $umur->sebelas_tahun_lk = $request->sebelas_tahun_lk;
        $umur->sebelas_tahun_pr = $request->sebelas_tahun_pr;
        $umur->dua_belas_tahun_lk = $request->dua_belas_tahun_lk;
        $umur->dua_belas_tahun_pr = $request->dua_belas_tahun_pr;
        $umur->tiga_belas_tahun_lk = $request->tiga_belas_tahun_lk;
        $umur->tiga_belas_tahun_pr = $request->tiga_belas_tahun_pr;
        $umur->empat_belas_tahun_lk = $request->empat_belas_tahun_lk;
        $umur->empat_belas_tahun_pr = $request->empat_belas_tahun_pr;
        $umur->lima_belas_tahun_lk = $request->lima_belas_tahun_lk;
        $umur->lima_belas_tahun_pr = $request->lima_belas_tahun_pr;
        $umur->enam_belas_tahun_lk = $request->enam_belas_tahun_lk;
        $umur->enam_belas_tahun_pr = $request->enam_belas_tahun_pr;
        $umur->tujuh_belas_tahun_lk = $request->tujuh_belas_tahun_lk;
        $umur->tujuh_belas_tahun_pr = $request->tujuh_belas_tahun_pr;
        $umur->delapan_belas_tahun_lk = $request->delapan_belas_tahun_lk;
        $umur->delapan_belas_tahun_pr = $request->delapan_belas_tahun_pr;
        $umur->sembilan_belas_tahun_lk = $request->sembilan_belas_tahun_lk;
        $umur->sembilan_belas_tahun_pr = $request->sembilan_belas_tahun_pr;
        $umur->dua_puluh_tahun_lk = $request->dua_puluh_tahun_lk;
        $umur->dua_puluh_tahun_pr = $request->dua_puluh_tahun_pr;
        $umur->dua_puluh_satu_tahun_lk = $request->dua_puluh_satu_tahun_lk;
        $umur->dua_puluh_satu_tahun_pr = $request->dua_puluh_satu_tahun_pr;
        $umur->dua_puluh_dua_tahun_lk = $request->dua_puluh_dua_tahun_lk;
        $umur->dua_puluh_dua_tahun_pr = $request->dua_puluh_dua_tahun_pr;
        $umur->dua_puluh_tiga_tahun_lk = $request->dua_puluh_tiga_tahun_lk;
        $umur->dua_puluh_tiga_tahun_pr = $request->dua_puluh_tiga_tahun_pr;
        $umur->dua_puluh_empat_tahun_lk = $request->dua_puluh_empat_tahun_lk;
        $umur->dua_puluh_empat_tahun_pr = $request->dua_puluh_empat_tahun_pr;
        $umur->dua_puluh_lima_tahun_lk = $request->dua_puluh_lima_tahun_lk;
        $umur->dua_puluh_lima_tahun_pr = $request->dua_puluh_lima_tahun_pr;
        $umur->dua_puluh_enam_tahun_lk = $request->dua_puluh_enam_tahun_lk;
        $umur->dua_puluh_enam_tahun_pr = $request->dua_puluh_enam_tahun_pr;
        $umur->dua_puluh_tujuh_tahun_lk = $request->dua_puluh_tujuh_tahun_lk;
        $umur->dua_puluh_tujuh_tahun_pr = $request->dua_puluh_tujuh_tahun_pr;
        $umur->dua_puluh_delapan_tahun_lk = $request->dua_puluh_delapan_tahun_lk;
        $umur->dua_puluh_delapan_tahun_pr = $request->dua_puluh_delapan_tahun_pr;
        $umur->dua_puluh_sembilan_tahun_lk = $request->dua_puluh_sembilan_tahun_lk;
        $umur->dua_puluh_sembilan_tahun_pr = $request->dua_puluh_sembilan_tahun_pr;
        $umur->tiga_puluh_tahun_lk = $request->tiga_puluh_tahun_lk;
        $umur->tiga_puluh_tahun_pr = $request->tiga_puluh_tahun_pr;
        $umur->tiga_puluh_satu_tahun_lk = $request->tiga_puluh_satu_tahun_lk;
        $umur->tiga_puluh_satu_tahun_pr = $request->tiga_puluh_satu_tahun_pr;
        $umur->tiga_puluh_dua_tahun_lk = $request->tiga_puluh_dua_tahun_lk;
        $umur->tiga_puluh_dua_tahun_pr = $request->tiga_puluh_dua_tahun_pr;
        $umur->tiga_puluh_tiga_tahun_lk = $request->tiga_puluh_tiga_tahun_lk;
        $umur->tiga_puluh_tiga_tahun_pr = $request->tiga_puluh_tiga_tahun_pr;
        $umur->tiga_puluh_empat_tahun_lk = $request->tiga_puluh_empat_tahun_lk;
        $umur->tiga_puluh_empat_tahun_pr = $request->tiga_puluh_empat_tahun_pr;
        $umur->tiga_puluh_lima_tahun_lk = $request->tiga_puluh_lima_tahun_lk;
        $umur->tiga_puluh_lima_tahun_pr = $request->tiga_puluh_lima_tahun_pr;
        $umur->tiga_puluh_enam_tahun_lk = $request->tiga_puluh_enam_tahun_lk;
        $umur->tiga_puluh_enam_tahun_pr = $request->tiga_puluh_enam_tahun_pr;
        $umur->tiga_puluh_tujuh_tahun_lk = $request->tiga_puluh_tujuh_tahun_lk;
        $umur->tiga_puluh_tujuh_tahun_pr = $request->tiga_puluh_tujuh_tahun_pr;
        $umur->tiga_puluh_delapan_tahun_lk = $request->tiga_puluh_delapan_tahun_lk;
        $umur->tiga_puluh_delapan_tahun_pr = $request->tiga_puluh_delapan_tahun_pr;
        $umur->tiga_puluh_sembilan_tahun_lk = $request->tiga_puluh_sembilan_tahun_lk;
        $umur->tiga_puluh_sembilan_tahun_pr = $request->tiga_puluh_sembilan_tahun_pr;
        $umur->empat_puluh_tahun_lk = $request->empat_puluh_tahun_lk;
        $umur->empat_puluh_tahun_pr = $request->empat_puluh_tahun_pr;
        $umur->empat_puluh_satu_tahun_lk = $request->empat_puluh_satu_tahun_lk;
        $umur->empat_puluh_satu_tahun_pr = $request->empat_puluh_satu_tahun_pr;
        $umur->empat_puluh_dua_tahun_lk = $request->empat_puluh_dua_tahun_lk;
        $umur->empat_puluh_dua_tahun_pr = $request->empat_puluh_dua_tahun_pr;
        $umur->empat_puluh_tiga_tahun_lk = $request->empat_puluh_tiga_tahun_lk;
        $umur->empat_puluh_tiga_tahun_pr = $request->empat_puluh_tiga_tahun_pr;
        $umur->empat_puluh_empat_tahun_lk = $request->empat_puluh_empat_tahun_lk;
        $umur->empat_puluh_empat_tahun_pr = $request->empat_puluh_empat_tahun_pr;
        $umur->empat_puluh_lima_tahun_lk = $request->empat_puluh_lima_tahun_lk;
        $umur->empat_puluh_lima_tahun_pr = $request->empat_puluh_lima_tahun_pr;
        $umur->empat_puluh_enam_tahun_lk = $request->empat_puluh_enam_tahun_lk;
        $umur->empat_puluh_enam_tahun_pr = $request->empat_puluh_enam_tahun_pr;
        $umur->empat_puluh_tujuh_tahun_lk = $request->empat_puluh_tujuh_tahun_lk;
        $umur->empat_puluh_tujuh_tahun_pr = $request->empat_puluh_tujuh_tahun_pr;
        $umur->empat_puluh_delapan_tahun_lk = $request->empat_puluh_delapan_tahun_lk;
        $umur->empat_puluh_delapan_tahun_pr = $request->empat_puluh_delapan_tahun_pr;
        $umur->empat_puluh_sembilan_tahun_lk = $request->empat_puluh_sembilan_tahun_lk;
        $umur->empat_puluh_sembilan_tahun_pr = $request->empat_puluh_sembilan_tahun_pr;
        $umur->lima_puluh_tahun_lk = $request->lima_puluh_tahun_lk;
        $umur->lima_puluh_tahun_pr = $request->lima_puluh_tahun_pr;
        $umur->lima_puluh_satu_tahun_lk = $request->lima_puluh_satu_tahun_lk;
        $umur->lima_puluh_satu_tahun_pr = $request->lima_puluh_satu_tahun_pr;
        $umur->lima_puluh_dua_tahun_lk = $request->lima_puluh_dua_tahun_lk;
        $umur->lima_puluh_dua_tahun_pr = $request->lima_puluh_dua_tahun_pr;
        $umur->lima_puluh_tiga_tahun_lk = $request->lima_puluh_tiga_tahun_lk;
        $umur->lima_puluh_tiga_tahun_pr = $request->lima_puluh_tiga_tahun_pr;
        $umur->lima_puluh_empat_tahun_lk = $request->lima_puluh_empat_tahun_lk;
        $umur->lima_puluh_empat_tahun_pr = $request->lima_puluh_empat_tahun_pr;
        $umur->lima_puluh_lima_tahun_lk = $request->lima_puluh_lima_tahun_lk;
        $umur->lima_puluh_lima_tahun_pr = $request->lima_puluh_lima_tahun_pr;
        $umur->lima_puluh_enam_tahun_lk = $request->lima_puluh_enam_tahun_lk;
        $umur->lima_puluh_enam_tahun_pr = $request->lima_puluh_enam_tahun_pr;
        $umur->lima_puluh_tujuh_tahun_lk = $request->lima_puluh_tujuh_tahun_lk;
        $umur->lima_puluh_tujuh_tahun_pr = $request->lima_puluh_tujuh_tahun_pr;
        $umur->lima_puluh_delapan_tahun_lk = $request->lima_puluh_delapan_tahun_lk;
        $umur->lima_puluh_delapan_tahun_pr = $request->lima_puluh_delapan_tahun_pr;
        $umur->lima_puluh_sembilan_tahun_lk = $request->lima_puluh_sembilan_tahun_lk;
        $umur->lima_puluh_sembilan_tahun_pr = $request->lima_puluh_sembilan_tahun_pr;
        $umur->enam_puluh_tahun_lk = $request->enam_puluh_tahun_lk;
        $umur->enam_puluh_tahun_pr = $request->enam_puluh_tahun_pr;
        $umur->enam_puluh_satu_tahun_lk = $request->enam_puluh_satu_tahun_lk;
        $umur->enam_puluh_satu_tahun_pr = $request->enam_puluh_satu_tahun_pr;
        $umur->enam_puluh_dua_tahun_lk = $request->enam_puluh_dua_tahun_lk;
        $umur->enam_puluh_dua_tahun_pr = $request->enam_puluh_dua_tahun_pr;
        $umur->enam_puluh_tiga_tahun_lk = $request->enam_puluh_tiga_tahun_lk;
        $umur->enam_puluh_tiga_tahun_pr = $request->enam_puluh_tiga_tahun_pr;
        $umur->enam_puluh_empat_tahun_lk = $request->enam_puluh_empat_tahun_lk;
        $umur->enam_puluh_empat_tahun_pr = $request->enam_puluh_empat_tahun_pr;
        $umur->enam_puluh_lima_tahun_lk = $request->enam_puluh_lima_tahun_lk;
        $umur->enam_puluh_lima_tahun_pr = $request->enam_puluh_lima_tahun_pr;
        $umur->enam_puluh_enam_tahun_lk = $request->enam_puluh_enam_tahun_lk;
        $umur->enam_puluh_enam_tahun_pr = $request->enam_puluh_enam_tahun_pr;
        $umur->enam_puluh_tujuh_tahun_lk = $request->enam_puluh_tujuh_tahun_lk;
        $umur->enam_puluh_tujuh_tahun_pr = $request->enam_puluh_tujuh_tahun_pr;
        $umur->enam_puluh_delapan_tahun_lk = $request->enam_puluh_delapan_tahun_lk;
        $umur->enam_puluh_delapan_tahun_pr = $request->enam_puluh_delapan_tahun_pr;
        $umur->enam_puluh_sembilan_tahun_lk = $request->enam_puluh_sembilan_tahun_lk;
        $umur->enam_puluh_sembilan_tahun_pr = $request->enam_puluh_sembilan_tahun_pr;
        $umur->tujuh_puluh_tahun_lk = $request->tujuh_puluh_tahun_lk;
        $umur->tujuh_puluh_tahun_pr = $request->tujuh_puluh_tahun_pr;
        $umur->tujuh_puluh_satu_tahun_lk = $request->tujuh_puluh_satu_tahun_lk;
        $umur->tujuh_puluh_satu_tahun_pr = $request->tujuh_puluh_satu_tahun_pr;
        $umur->tujuh_puluh_dua_tahun_lk = $request->tujuh_puluh_dua_tahun_lk;
        $umur->tujuh_puluh_dua_tahun_pr = $request->tujuh_puluh_dua_tahun_pr;
        $umur->tujuh_puluh_tiga_tahun_lk = $request->tujuh_puluh_tiga_tahun_lk;
        $umur->tujuh_puluh_tiga_tahun_pr = $request->tujuh_puluh_tiga_tahun_pr;
        $umur->tujuh_puluh_empat_tahun_lk = $request->tujuh_puluh_empat_tahun_lk;
        $umur->tujuh_puluh_empat_tahun_pr = $request->tujuh_puluh_empat_tahun_pr;
        $umur->tujuh_puluh_lima_tahun_lk = $request->tujuh_puluh_lima_tahun_lk;
        $umur->tujuh_puluh_lima_tahun_pr = $request->tujuh_puluh_lima_tahun_pr;
        $umur->tujuh_puluh_enam_tahun_lk = $request->tujuh_puluh_enam_tahun_lk;
        $umur->tujuh_puluh_enam_tahun_pr = $request->tujuh_puluh_enam_tahun_pr;
        $umur->tujuh_puluh_tujuh_tahun_lk = $request->tujuh_puluh_tujuh_tahun_lk;
        $umur->tujuh_puluh_tujuh_tahun_pr = $request->tujuh_puluh_tujuh_tahun_pr;
        $umur->tujuh_puluh_delapan_tahun_lk = $request->tujuh_puluh_delapan_tahun_lk;
        $umur->tujuh_puluh_delapan_tahun_pr = $request->tujuh_puluh_delapan_tahun_pr;
        $umur->tujuh_puluh_sembilan_tahun_lk = $request->tujuh_puluh_sembilan_tahun_lk;
        $umur->tujuh_puluh_sembilan_tahun_pr = $request->tujuh_puluh_sembilan_tahun_pr;
        $umur->delapan_puluh_tahun_lk = $request->delapan_puluh_tahun_lk;
        $umur->delapan_puluh_tahun_pr = $request->delapan_puluh_tahun_pr;
        $umur->delapan_puluh_satu_tahun_lk = $request->delapan_puluh_satu_tahun_lk;
        $umur->delapan_puluh_satu_tahun_pr = $request->delapan_puluh_satu_tahun_pr;
        $umur->delapan_puluh_dua_tahun_lk = $request->delapan_puluh_dua_tahun_lk;
        $umur->delapan_puluh_dua_tahun_pr = $request->delapan_puluh_dua_tahun_pr;
        $umur->delapan_puluh_tiga_tahun_lk = $request->delapan_puluh_tiga_tahun_lk;
        $umur->delapan_puluh_tiga_tahun_pr = $request->delapan_puluh_tiga_tahun_pr;
        $umur->delapan_puluh_empat_tahun_lk = $request->delapan_puluh_empat_tahun_lk;
        $umur->delapan_puluh_empat_tahun_pr = $request->delapan_puluh_empat_tahun_pr;
        $umur->delapan_puluh_lima_tahun_lk = $request->delapan_puluh_lima_tahun_lk;
        $umur->delapan_puluh_lima_tahun_pr = $request->delapan_puluh_lima_tahun_pr;
        $umur->delapan_puluh_enam_tahun_lk = $request->delapan_puluh_enam_tahun_lk;
        $umur->delapan_puluh_enam_tahun_pr = $request->delapan_puluh_enam_tahun_pr;
        $umur->delapan_puluh_tujuh_tahun_lk = $request->delapan_puluh_tujuh_tahun_lk;
        $umur->delapan_puluh_tujuh_tahun_pr = $request->delapan_puluh_tujuh_tahun_pr;
        $umur->delapan_puluh_delapan_tahun_lk = $request->delapan_puluh_delapan_tahun_lk;
        $umur->delapan_puluh_delapan_tahun_pr = $request->delapan_puluh_delapan_tahun_pr;
        $umur->delapan_puluh_sembilan_tahun_lk = $request->delapan_puluh_sembilan_tahun_lk;
        $umur->delapan_puluh_sembilan_tahun_pr = $request->delapan_puluh_sembilan_tahun_pr;
        $umur->sembilan_puluh_tahun_lk = $request->sembilan_puluh_tahun_lk;
        $umur->sembilan_puluh_tahun_pr = $request->sembilan_puluh_tahun_pr;
        $umur->sembilan_puluh_satu_tahun_lk = $request->sembilan_puluh_satu_tahun_lk;
        $umur->sembilan_puluh_satu_tahun_pr = $request->sembilan_puluh_satu_tahun_pr;
        $umur->sembilan_puluh_dua_tahun_lk = $request->sembilan_puluh_dua_tahun_lk;
        $umur->sembilan_puluh_dua_tahun_pr = $request->sembilan_puluh_dua_tahun_pr;
        $umur->sembilan_puluh_tiga_tahun_lk = $request->sembilan_puluh_tiga_tahun_lk;
        $umur->sembilan_puluh_tiga_tahun_pr = $request->sembilan_puluh_tiga_tahun_pr;
        $umur->sembilan_puluh_empat_tahun_lk = $request->sembilan_puluh_empat_tahun_lk;
        $umur->sembilan_puluh_empat_tahun_pr = $request->sembilan_puluh_empat_tahun_pr;
        $umur->seratus_tahun_lk = $request->seratus_tahun_lk;
        $umur->seratus_tahun_pr = $request->seratus_tahun_pr;
        $umur->seratus_satu_tahun_lk = $request->seratus_satu_tahun_lk;
        $umur->seratus_satu_tahun_pr = $request->seratus_satu_tahun_pr;
        $umur->seratus_dua_tahun_lk = $request->seratus_dua_tahun_lk;
        $umur->seratus_dua_tahun_pr = $request->seratus_dua_tahun_pr;
        $umur->seratus_tiga_tahun_lk = $request->seratus_tiga_tahun_lk;
        $umur->seratus_tiga_tahun_pr = $request->seratus_tiga_tahun_pr;
        $umur->seratus_empat_tahun_lk = $request->seratus_empat_tahun_lk;
        $umur->seratus_empat_tahun_pr = $request->seratus_empat_tahun_pr;
        $umur->seratus_lima_tahun_lk = $request->seratus_lima_tahun_lk;
        $umur->seratus_lima_tahun_pr = $request->seratus_lima_tahun_pr;
        $umur->seratus_enam_tahun_lk = $request->seratus_enam_tahun_lk;
        $umur->seratus_enam_tahun_pr = $request->seratus_enam_tahun_pr;
        $umur->seratus_tujuh_tahun_lk = $request->seratus_tujuh_tahun_lk;
        $umur->seratus_tujuh_tahun_pr = $request->seratus_tujuh_tahun_pr;
        $umur->seratus_delapan_tahun_lk = $request->seratus_delapan_tahun_lk;
        $umur->seratus_delapan_tahun_pr = $request->seratus_delapan_tahun_pr;
        $umur->seratus_sembilan_tahun_lk = $request->seratus_sembilan_tahun_lk;
        $umur->seratus_sembilan_tahun_pr = $request->seratus_sembilan_tahun_pr;
        $umur->seratus_sepuluh_tahun_lk = $request->seratus_sepuluh_tahun_lk;
        $umur->seratus_sepuluh_tahun_pr = $request->seratus_sepuluh_tahun_pr;
        $umur->seratus_sebelas_tahun_lk = $request->seratus_sebelas_tahun_lk;
        $umur->seratus_sebelas_tahun_pr = $request->seratus_sebelas_tahun_pr;
        $umur->seratus_dua_belas_tahun_lk = $request->seratus_dua_belas_tahun_lk;
        $umur->seratus_dua_belas_tahun_pr = $request->seratus_dua_belas_tahun_pr;
        $umur->seratus_tiga_belas_tahun_lk = $request->seratus_tiga_belas_tahun_lk;
        $umur->seratus_tiga_belas_tahun_pr = $request->seratus_tiga_belas_tahun_pr;
        $umur->seratus_empat_belas_tahun_lk = $request->seratus_empat_belas_tahun_lk;
        $umur->seratus_empat_belas_tahun_pr = $request->seratus_empat_belas_tahun_pr;
        $umur->seratus_lima_belas_tahun_lk = $request->seratus_lima_belas_tahun_lk;
        $umur->seratus_lima_belas_tahun_pr = $request->seratus_lima_belas_tahun_pr;
        $umur->seratus_enam_belas_tahun_lk = $request->seratus_enam_belas_tahun_lk;
        $umur->seratus_enam_belas_tahun_pr = $request->seratus_enam_belas_tahun_pr;
        $umur->seratus_tujuh_belas_tahun_lk = $request->seratus_tujuh_belas_tahun_lk;
        $umur->seratus_tujuh_belas_tahun_pr = $request->seratus_tujuh_belas_tahun_pr;
        $umur->seratus_delapan_belas_tahun_lk = $request->seratus_delapan_belas_tahun_lk;
        $umur->seratus_delapan_belas_tahun_pr = $request->seratus_delapan_belas_tahun_pr;
        $umur->seratus_sembilan_belas_tahun_lk = $request->seratus_sembilan_belas_tahun_lk;
        $umur->seratus_sembilan_belas_tahun_pr = $request->seratus_sembilan_belas_tahun_pr;
        $umur->seratus_dua_puluh_tahun_lk = $request->seratus_dua_puluh_tahun_lk;
        $umur->seratus_dua_puluh_tahun_pr = $request->seratus_dua_puluh_tahun_pr;
        $umur->seratus_dua_puluh_satu_tahun_lk = $request->seratus_dua_puluh_satu_tahun_lk;
        $umur->seratus_dua_puluh_satu_tahun_pr = $request->seratus_dua_puluh_satu_tahun_pr;

        $umur->save();     
        return redirect()->route('umur.index')
                         ->with('success','umur has been created successfully.');
    }
       
    public function show(UmurModel $umur) : view
    {
        return view('umur.show',compact('umur'));
    } 
      
    
    public function edit(UmurModel $umur) : view
    {
        return view('umur.edit',compact('umur'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'nol_tahun_lk' => 'required',
          'nol_tahun_pr' => 'required',
          'satu_tahun_lk' => 'required',
          'satu_tahun_pr' => 'required',
          'dua_tahun_lk' => 'required',
          'dua_tahun_pr' => 'required',
          'tiga_tahun_lk' => 'required',
          'tiga_tahun_pr' => 'required',
          'empat_tahun_lk' => 'required',
          'empat_tahun_pr' => 'required',
          'lima_tahun_lk' => 'required',
          'lima_tahun_pr' => 'required',
          'enam_tahun_lk' => 'required',
          'enam_tahun_pr' => 'required',
          'tujuh_tahun_lk' => 'required',
          'tujuh_tahun_pr' => 'required',
          'delapan_tahun_lk' => 'required',
          'delapan_tahun_pr' => 'required',
          'sembilan_tahun_lk' => 'required',
          'sembilan_tahun_pr' => 'required',
          'sepuluh_tahun_lk' => 'required',
          'sepuluh_tahun_pr' => 'required',
          'sebelas_tahun_lk' => 'required',
          'sebelas_tahun_pr' => 'required',
          'dua_belas_tahun_lk' => 'required',
          'dua_belas_tahun_pr' => 'required',
          'tiga_belas_tahun_lk' => 'required',
          'tiga_belas_tahun_pr' => 'required',
          'empat_belas_tahun_lk' => 'required',
          'empat_belas_tahun_pr' => 'required',
          'lima_belas_tahun_lk' => 'required',
          'lima_belas_tahun_pr' => 'required',
          'enam_belas_tahun_lk' => 'required',
          'enam_belas_tahun_pr' => 'required',
          'tujuh_belas_tahun_lk' => 'required',
          'tujuh_belas_tahun_pr' => 'required',
          'delapan_belas_tahun_lk' => 'required',
          'delapan_belas_tahun_pr' => 'required',
          'sembilan_belas_tahun_lk' => 'required',
          'sembilan_belas_tahun_pr' => 'required',
          'dua_puluh_tahun_lk' => 'required',
          'dua_puluh_tahun_pr' => 'required',
          'dua_puluh_satu_tahun_lk' => 'required',
          'dua_puluh_satu_tahun_pr' => 'required',
          'dua_puluh_dua_tahun_lk' => 'required',
          'dua_puluh_dua_tahun_pr' => 'required',
          'dua_puluh_tiga_tahun_lk' => 'required',
          'dua_puluh_tiga_tahun_pr' => 'required',
          'dua_puluh_empat_tahun_lk' => 'required',
          'dua_puluh_empat_tahun_pr' => 'required',
          'dua_puluh_lima_tahun_lk' => 'required',
          'dua_puluh_lima_tahun_pr' => 'required',
          'dua_puluh_enam_tahun_lk' => 'required',
          'dua_puluh_enam_tahun_pr' => 'required',
          'dua_puluh_tujuh_tahun_lk' => 'required',
          'dua_puluh_tujuh_tahun_pr' => 'required',
          'dua_puluh_delapan_tahun_lk' => 'required',
          'dua_puluh_delapan_tahun_pr' => 'required',
          'dua_puluh_sembilan_tahun_lk' => 'required',
          'dua_puluh_sembilan_tahun_pr' => 'required',
          'tiga_puluh_tahun_lk' => 'required',
          'tiga_puluh_tahun_pr' => 'required',
          'tiga_puluh_satu_tahun_lk' => 'required',
          'tiga_puluh_satu_tahun_pr' => 'required',
          'tiga_puluh_dua_tahun_lk' => 'required',
          'tiga_puluh_dua_tahun_pr' => 'required',
          'tiga_puluh_tiga_tahun_lk' => 'required',
          'tiga_puluh_tiga_tahun_pr' => 'required',
          'tiga_puluh_empat_tahun_lk' => 'required',
          'tiga_puluh_empat_tahun_pr' => 'required',
          'tiga_puluh_lima_tahun_lk' => 'required',
          'tiga_puluh_lima_tahun_pr' => 'required',
          'tiga_puluh_enam_tahun_lk' => 'required',
          'tiga_puluh_enam_tahun_pr' => 'required',
          'tiga_puluh_tujuh_tahun_lk' => 'required',
          'tiga_puluh_tujuh_tahun_pr' => 'required',
          'tiga_puluh_delapan_tahun_lk' => 'required',
          'tiga_puluh_delapan_tahun_pr' => 'required',
          'tiga_puluh_sembilan_tahun_lk' => 'required',
          'tiga_puluh_sembilan_tahun_pr' => 'required',
          'empat_puluh_tahun_lk' => 'required',
          'empat_puluh_tahun_pr' => 'required',
          'empat_puluh_satu_tahun_lk' => 'required',
          'empat_puluh_satu_tahun_pr' => 'required',
          'empat_puluh_dua_tahun_lk' => 'required',
          'empat_puluh_dua_tahun_pr' => 'required',
          'empat_puluh_tiga_tahun_lk' => 'required',
          'empat_puluh_tiga_tahun_pr' => 'required',
          'empat_puluh_empat_tahun_lk' => 'required',
          'empat_puluh_empat_tahun_pr' => 'required',
          'empat_puluh_lima_tahun_lk' => 'required',
          'empat_puluh_lima_tahun_pr' => 'required',
          'empat_puluh_enam_tahun_lk' => 'required',
          'empat_puluh_enam_tahun_pr' => 'required',
          'empat_puluh_tujuh_tahun_lk' => 'required',
          'empat_puluh_tujuh_tahun_pr' => 'required',
          'empat_puluh_delapan_tahun_lk' => 'required',
          'empat_puluh_delapan_tahun_pr' => 'required',
          'empat_puluh_sembilan_tahun_lk' => 'required',
          'empat_puluh_sembilan_tahun_pr' => 'required',
          'lima_puluh_tahun_lk' => 'required',
          'lima_puluh_tahun_pr' => 'required',
          'lima_puluh_satu_tahun_lk' => 'required',
          'lima_puluh_satu_tahun_pr' => 'required',
          'lima_puluh_dua_tahun_lk' => 'required',
          'lima_puluh_dua_tahun_pr' => 'required',
          'lima_puluh_tiga_tahun_lk' => 'required',
          'lima_puluh_tiga_tahun_pr' => 'required',
          'lima_puluh_empat_tahun_lk' => 'required',
          'lima_puluh_empat_tahun_pr' => 'required',
          'lima_puluh_lima_tahun_lk' => 'required',
          'lima_puluh_lima_tahun_pr' => 'required',
          'lima_puluh_enam_tahun_lk' => 'required',
          'lima_puluh_enam_tahun_pr' => 'required',
          'lima_puluh_tujuh_tahun_lk' => 'required',
          'lima_puluh_tujuh_tahun_pr' => 'required',
          'lima_puluh_delapan_tahun_lk' => 'required',
          'lima_puluh_delapan_tahun_pr' => 'required',
          'lima_puluh_sembilan_tahun_lk' => 'required',
          'lima_puluh_sembilan_tahun_pr' => 'required',
          'enam_puluh_tahun_lk' => 'required',
          'enam_puluh_tahun_pr' => 'required',
          'enam_puluh_satu_tahun_lk' => 'required',
          'enam_puluh_satu_tahun_pr' => 'required',
          'enam_puluh_dua_tahun_lk' => 'required',
          'enam_puluh_dua_tahun_pr' => 'required',
          'enam_puluh_tiga_tahun_lk' => 'required',
          'enam_puluh_tiga_tahun_pr' => 'required',
          'enam_puluh_empat_tahun_lk' => 'required',
          'enam_puluh_empat_tahun_pr' => 'required',
          'enam_puluh_lima_tahun_lk' => 'required',
          'enam_puluh_lima_tahun_pr' => 'required',
          'enam_puluh_enam_tahun_lk' => 'required',
          'enam_puluh_enam_tahun_pr' => 'required',
          'enam_puluh_tujuh_tahun_lk' => 'required',
          'enam_puluh_tujuh_tahun_pr' => 'required',
          'enam_puluh_delapan_tahun_lk' => 'required',
          'enam_puluh_delapan_tahun_pr' => 'required',
          'enam_puluh_sembilan_tahun_lk' => 'required',
          'enam_puluh_sembilan_tahun_pr' => 'required',
          'tujuh_puluh_tahun_lk' => 'required',
          'tujuh_puluh_tahun_pr' => 'required',
          'tujuh_puluh_satu_tahun_lk' => 'required',
          'tujuh_puluh_satu_tahun_pr' => 'required',
          'tujuh_puluh_dua_tahun_lk' => 'required',
          'tujuh_puluh_dua_tahun_pr' => 'required',
          'tujuh_puluh_tiga_tahun_lk' => 'required',
          'tujuh_puluh_tiga_tahun_pr' => 'required',
          'tujuh_puluh_empat_tahun_lk' => 'required',
          'tujuh_puluh_empat_tahun_pr' => 'required',
          'tujuh_puluh_lima_tahun_lk' => 'required',
          'tujuh_puluh_lima_tahun_pr' => 'required',
          'tujuh_puluh_enam_tahun_lk' => 'required',
          'tujuh_puluh_enam_tahun_pr' => 'required',
          'tujuh_puluh_tujuh_tahun_lk' => 'required',
          'tujuh_puluh_tujuh_tahun_pr' => 'required',
          'tujuh_puluh_delapan_tahun_lk' => 'required',
          'tujuh_puluh_delapan_tahun_pr' => 'required',
          'tujuh_puluh_sembilan_tahun_lk' => 'required',
          'tujuh_puluh_sembilan_tahun_pr' => 'required',
          'delapan_puluh_tahun_lk' => 'required',
          'delapan_puluh_tahun_pr' => 'required',
          'delapan_puluh_satu_tahun_lk' => 'required',
          'delapan_puluh_satu_tahun_pr' => 'required',
          'delapan_puluh_dua_tahun_lk' => 'required',
          'delapan_puluh_dua_tahun_pr' => 'required',
          'delapan_puluh_tiga_tahun_lk' => 'required',
          'delapan_puluh_tiga_tahun_pr' => 'required',
          'delapan_puluh_empat_tahun_lk' => 'required',
          'delapan_puluh_empat_tahun_pr' => 'required',
          'delapan_puluh_lima_tahun_lk' => 'required',
          'delapan_puluh_lima_tahun_pr' => 'required',
          'delapan_puluh_enam_tahun_lk' => 'required',
          'delapan_puluh_enam_tahun_pr' => 'required',
          'delapan_puluh_tujuh_tahun_lk' => 'required',
          'delapan_puluh_tujuh_tahun_pr' => 'required',
          'delapan_puluh_delapan_tahun_lk' => 'required',
          'delapan_puluh_delapan_tahun_pr' => 'required',
          'delapan_puluh_sembilan_tahun_lk' => 'required',
          'delapan_puluh_sembilan_tahun_pr' => 'required',
          'sembilan_puluh_tahun_lk' => 'required',
          'sembilan_puluh_tahun_pr' => 'required',
          'sembilan_puluh_satu_tahun_lk' => 'required',
          'sembilan_puluh_satu_tahun_pr' => 'required',
          'sembilan_puluh_dua_tahun_lk' => 'required',
          'sembilan_puluh_dua_tahun_pr' => 'required',
          'sembilan_puluh_tiga_tahun_lk' => 'required',
          'sembilan_puluh_tiga_tahun_pr' => 'required',
          'sembilan_puluh_empat_tahun_lk' => 'required',
          'sembilan_puluh_empat_tahun_pr' => 'required',
          'seratus_tahun_lk' => 'required',
          'seratus_tahun_pr' => 'required',
          'seratus_satu_tahun_lk' => 'required',
          'seratus_satu_tahun_pr' => 'required',
          'seratus_dua_tahun_lk' => 'required',
          'seratus_dua_tahun_pr' => 'required',
          'seratus_tiga_tahun_lk' => 'required',
          'seratus_tiga_tahun_pr' => 'required',
          'seratus_empat_tahun_lk' => 'required',
          'seratus_empat_tahun_pr' => 'required',
          'seratus_lima_tahun_lk' => 'required',
          'seratus_lima_tahun_pr' => 'required',
          'seratus_enam_tahun_lk' => 'required',
          'seratus_enam_tahun_pr' => 'required',
          'seratus_tujuh_tahun_lk' => 'required',
          'seratus_tujuh_tahun_pr' => 'required',
          'seratus_delapan_tahun_lk' => 'required',
          'seratus_delapan_tahun_pr' => 'required',
          'seratus_sembilan_tahun_lk' => 'required',
          'seratus_sembilan_tahun_pr' => 'required',
          'seratus_sepuluh_tahun_lk' => 'required',
          'seratus_sepuluh_tahun_pr' => 'required',
          'seratus_sebelas_tahun_lk' => 'required',
          'seratus_sebelas_tahun_pr' => 'required',
          'seratus_dua_belas_tahun_lk' => 'required',
          'seratus_dua_belas_tahun_pr' => 'required',
          'seratus_tiga_belas_tahun_lk' => 'required',
          'seratus_tiga_belas_tahun_pr' => 'required',
          'seratus_empat_belas_tahun_lk' => 'required',
          'seratus_empat_belas_tahun_pr' => 'required',
          'seratus_lima_belas_tahun_lk' => 'required',
          'seratus_lima_belas_tahun_pr' => 'required',
          'seratus_enam_belas_tahun_lk' => 'required',
          'seratus_enam_belas_tahun_pr' => 'required',
          'seratus_tujuh_belas_tahun_lk' => 'required',
          'seratus_tujuh_belas_tahun_pr' => 'required',
          'seratus_delapan_belas_tahun_lk' => 'required',
          'seratus_delapan_belas_tahun_pr' => 'required',
          'seratus_sembilan_belas_tahun_lk' => 'required',
          'seratus_sembilan_belas_tahun_pr' => 'required',
          'seratus_dua_puluh_tahun_lk' => 'required',
          'seratus_dua_puluh_tahun_pr' => 'required',
          'seratus_dua_puluh_satu_tahun_lk' => 'required',
          'seratus_dua_puluh_satu_tahun_pr' => 'required',

        ]);

        $umur = UmurModel::find($id); 

        // Check if umur exists
        if (!$umur) {
            return redirect()->route('umur.index')
                            ->with('error', 'Umur not found');
        }
        $umur->kode= $request->kode;
        $umur->wilayah= $request->wilayah;
        $umur->nol_tahun_lk= $request->nol_tahun_lk;
        $umur->nol_tahun_pr= $request->nol_tahun_pr;
        $umur->satu_tahun_lk= $request->satu_tahun_lk;
        $umur->satu_tahun_pr= $request->satu_tahun_pr;
        $umur->dua_tahun_lk= $request->dua_tahun_lk;
        $umur->dua_tahun_pr= $request->dua_tahun_pr;
        $umur->tiga_tahun_lk= $request->tiga_tahun_lk;
        $umur->tiga_tahun_pr= $request->tiga_tahun_pr;
        $umur->empat_tahun_lk= $request->empat_tahun_lk;
        $umur->empat_tahun_pr= $request->empat_tahun_pr;
        $umur->lima_tahun_lk= $request->lima_tahun_lk;
        $umur->lima_tahun_pr= $request->lima_tahun_pr;
        $umur->enam_tahun_lk= $request->enam_tahun_lk;
        $umur->enam_tahun_pr= $request->enam_tahun_pr;
        $umur->tujuh_tahun_lk= $request->tujuh_tahun_lk;
        $umur->tujuh_tahun_pr= $request->tujuh_tahun_pr;
        $umur->delapan_tahun_lk= $request->delapan_tahun_lk;
        $umur->delapan_tahun_pr= $request->delapan_tahun_pr;
        $umur->sembilan_tahun_lk= $request->sembilan_tahun_lk;
        $umur->sembilan_tahun_pr= $request->sembilan_tahun_pr;
        $umur->sepuluh_tahun_lk= $request->sepuluh_tahun_lk;
        $umur->sepuluh_tahun_pr= $request->sepuluh_tahun_pr;
        $umur->sebelas_tahun_lk= $request->sebelas_tahun_lk;
        $umur->sebelas_tahun_pr= $request->sebelas_tahun_pr;
        $umur->dua_belas_tahun_lk= $request->dua_belas_tahun_lk;
        $umur->dua_belas_tahun_pr= $request->dua_belas_tahun_pr;
        $umur->tiga_belas_tahun_lk= $request->tiga_belas_tahun_lk;
        $umur->tiga_belas_tahun_pr= $request->tiga_belas_tahun_pr;
        $umur->empat_belas_tahun_lk= $request->empat_belas_tahun_lk;
        $umur->empat_belas_tahun_pr= $request->empat_belas_tahun_pr;
        $umur->lima_belas_tahun_lk= $request->lima_belas_tahun_lk;
        $umur->lima_belas_tahun_pr= $request->lima_belas_tahun_pr;
        $umur->enam_belas_tahun_lk= $request->enam_belas_tahun_lk;
        $umur->enam_belas_tahun_pr= $request->enam_belas_tahun_pr;
        $umur->tujuh_belas_tahun_lk= $request->tujuh_belas_tahun_lk;
        $umur->tujuh_belas_tahun_pr= $request->tujuh_belas_tahun_pr;
        $umur->delapan_belas_tahun_lk= $request->delapan_belas_tahun_lk;
        $umur->delapan_belas_tahun_pr= $request->delapan_belas_tahun_pr;
        $umur->sembilan_belas_tahun_lk= $request->sembilan_belas_tahun_lk;
        $umur->sembilan_belas_tahun_pr= $request->sembilan_belas_tahun_pr;
        $umur->dua_puluh_tahun_lk= $request->dua_puluh_tahun_lk;
        $umur->dua_puluh_tahun_pr= $request->dua_puluh_tahun_pr;
        $umur->dua_puluh_satu_tahun_lk= $request->dua_puluh_satu_tahun_lk;
        $umur->dua_puluh_satu_tahun_pr= $request->dua_puluh_satu_tahun_pr;
        $umur->dua_puluh_dua_tahun_lk= $request->dua_puluh_dua_tahun_lk;
        $umur->dua_puluh_dua_tahun_pr= $request->dua_puluh_dua_tahun_pr;
        $umur->dua_puluh_tiga_tahun_lk= $request->dua_puluh_tiga_tahun_lk;
        $umur->dua_puluh_tiga_tahun_pr= $request->dua_puluh_tiga_tahun_pr;
        $umur->dua_puluh_empat_tahun_lk= $request->dua_puluh_empat_tahun_lk;
        $umur->dua_puluh_empat_tahun_pr= $request->dua_puluh_empat_tahun_pr;
        $umur->dua_puluh_lima_tahun_lk= $request->dua_puluh_lima_tahun_lk;
        $umur->dua_puluh_lima_tahun_pr= $request->dua_puluh_lima_tahun_pr;
        $umur->dua_puluh_enam_tahun_lk= $request->dua_puluh_enam_tahun_lk;
        $umur->dua_puluh_enam_tahun_pr= $request->dua_puluh_enam_tahun_pr;
        $umur->dua_puluh_tujuh_tahun_lk= $request->dua_puluh_tujuh_tahun_lk;
        $umur->dua_puluh_tujuh_tahun_pr= $request->dua_puluh_tujuh_tahun_pr;
        $umur->dua_puluh_delapan_tahun_lk= $request->dua_puluh_delapan_tahun_lk;
        $umur->dua_puluh_delapan_tahun_pr= $request->dua_puluh_delapan_tahun_pr;
        $umur->dua_puluh_sembilan_tahun_lk= $request->dua_puluh_sembilan_tahun_lk;
        $umur->dua_puluh_sembilan_tahun_pr= $request->dua_puluh_sembilan_tahun_pr;
        $umur->tiga_puluh_tahun_lk= $request->tiga_puluh_tahun_lk;
        $umur->tiga_puluh_tahun_pr= $request->tiga_puluh_tahun_pr;
        $umur->tiga_puluh_satu_tahun_lk= $request->tiga_puluh_satu_tahun_lk;
        $umur->tiga_puluh_satu_tahun_pr= $request->tiga_puluh_satu_tahun_pr;
        $umur->tiga_puluh_dua_tahun_lk= $request->tiga_puluh_dua_tahun_lk;
        $umur->tiga_puluh_dua_tahun_pr= $request->tiga_puluh_dua_tahun_pr;
        $umur->tiga_puluh_tiga_tahun_lk= $request->tiga_puluh_tiga_tahun_lk;
        $umur->tiga_puluh_tiga_tahun_pr= $request->tiga_puluh_tiga_tahun_pr;
        $umur->tiga_puluh_empat_tahun_lk= $request->tiga_puluh_empat_tahun_lk;
        $umur->tiga_puluh_empat_tahun_pr= $request->tiga_puluh_empat_tahun_pr;
        $umur->tiga_puluh_lima_tahun_lk= $request->tiga_puluh_lima_tahun_lk;
        $umur->tiga_puluh_lima_tahun_pr= $request->tiga_puluh_lima_tahun_pr;
        $umur->tiga_puluh_enam_tahun_lk= $request->tiga_puluh_enam_tahun_lk;
        $umur->tiga_puluh_enam_tahun_pr= $request->tiga_puluh_enam_tahun_pr;
        $umur->tiga_puluh_tujuh_tahun_lk= $request->tiga_puluh_tujuh_tahun_lk;
        $umur->tiga_puluh_tujuh_tahun_pr= $request->tiga_puluh_tujuh_tahun_pr;
        $umur->tiga_puluh_delapan_tahun_lk= $request->tiga_puluh_delapan_tahun_lk;
        $umur->tiga_puluh_delapan_tahun_pr= $request->tiga_puluh_delapan_tahun_pr;
        $umur->tiga_puluh_sembilan_tahun_lk= $request->tiga_puluh_sembilan_tahun_lk;
        $umur->tiga_puluh_sembilan_tahun_pr= $request->tiga_puluh_sembilan_tahun_pr;
        $umur->empat_puluh_tahun_lk= $request->empat_puluh_tahun_lk;
        $umur->empat_puluh_tahun_pr= $request->empat_puluh_tahun_pr;
        $umur->empat_puluh_satu_tahun_lk= $request->empat_puluh_satu_tahun_lk;
        $umur->empat_puluh_satu_tahun_pr= $request->empat_puluh_satu_tahun_pr;
        $umur->empat_puluh_dua_tahun_lk= $request->empat_puluh_dua_tahun_lk;
        $umur->empat_puluh_dua_tahun_pr= $request->empat_puluh_dua_tahun_pr;
        $umur->empat_puluh_tiga_tahun_lk= $request->empat_puluh_tiga_tahun_lk;
        $umur->empat_puluh_tiga_tahun_pr= $request->empat_puluh_tiga_tahun_pr;
        $umur->empat_puluh_empat_tahun_lk= $request->empat_puluh_empat_tahun_lk;
        $umur->empat_puluh_empat_tahun_pr= $request->empat_puluh_empat_tahun_pr;
        $umur->empat_puluh_lima_tahun_lk= $request->empat_puluh_lima_tahun_lk;
        $umur->empat_puluh_lima_tahun_pr= $request->empat_puluh_lima_tahun_pr;
        $umur->empat_puluh_enam_tahun_lk= $request->empat_puluh_enam_tahun_lk;
        $umur->empat_puluh_enam_tahun_pr= $request->empat_puluh_enam_tahun_pr;
        $umur->empat_puluh_tujuh_tahun_lk= $request->empat_puluh_tujuh_tahun_lk;
        $umur->empat_puluh_tujuh_tahun_pr= $request->empat_puluh_tujuh_tahun_pr;
        $umur->empat_puluh_delapan_tahun_lk= $request->empat_puluh_delapan_tahun_lk;
        $umur->empat_puluh_delapan_tahun_pr= $request->empat_puluh_delapan_tahun_pr;
        $umur->empat_puluh_sembilan_tahun_lk= $request->empat_puluh_sembilan_tahun_lk;
        $umur->empat_puluh_sembilan_tahun_pr= $request->empat_puluh_sembilan_tahun_pr;
        $umur->lima_puluh_tahun_lk= $request->lima_puluh_tahun_lk;
        $umur->lima_puluh_tahun_pr= $request->lima_puluh_tahun_pr;
        $umur->lima_puluh_satu_tahun_lk= $request->lima_puluh_satu_tahun_lk;
        $umur->lima_puluh_satu_tahun_pr= $request->lima_puluh_satu_tahun_pr;
        $umur->lima_puluh_dua_tahun_lk= $request->lima_puluh_dua_tahun_lk;
        $umur->lima_puluh_dua_tahun_pr= $request->lima_puluh_dua_tahun_pr;
        $umur->lima_puluh_tiga_tahun_lk= $request->lima_puluh_tiga_tahun_lk;
        $umur->lima_puluh_tiga_tahun_pr= $request->lima_puluh_tiga_tahun_pr;
        $umur->lima_puluh_empat_tahun_lk= $request->lima_puluh_empat_tahun_lk;
        $umur->lima_puluh_empat_tahun_pr= $request->lima_puluh_empat_tahun_pr;
        $umur->lima_puluh_lima_tahun_lk= $request->lima_puluh_lima_tahun_lk;
        $umur->lima_puluh_lima_tahun_pr= $request->lima_puluh_lima_tahun_pr;
        $umur->lima_puluh_enam_tahun_lk= $request->lima_puluh_enam_tahun_lk;
        $umur->lima_puluh_enam_tahun_pr= $request->lima_puluh_enam_tahun_pr;
        $umur->lima_puluh_tujuh_tahun_lk= $request->lima_puluh_tujuh_tahun_lk;
        $umur->lima_puluh_tujuh_tahun_pr= $request->lima_puluh_tujuh_tahun_pr;
        $umur->lima_puluh_delapan_tahun_lk= $request->lima_puluh_delapan_tahun_lk;
        $umur->lima_puluh_delapan_tahun_pr= $request->lima_puluh_delapan_tahun_pr;
        $umur->lima_puluh_sembilan_tahun_lk= $request->lima_puluh_sembilan_tahun_lk;
        $umur->lima_puluh_sembilan_tahun_pr= $request->lima_puluh_sembilan_tahun_pr;
        $umur->enam_puluh_tahun_lk= $request->enam_puluh_tahun_lk;
        $umur->enam_puluh_tahun_pr= $request->enam_puluh_tahun_pr;
        $umur->enam_puluh_satu_tahun_lk= $request->enam_puluh_satu_tahun_lk;
        $umur->enam_puluh_satu_tahun_pr= $request->enam_puluh_satu_tahun_pr;
        $umur->enam_puluh_dua_tahun_lk= $request->enam_puluh_dua_tahun_lk;
        $umur->enam_puluh_dua_tahun_pr= $request->enam_puluh_dua_tahun_pr;
        $umur->enam_puluh_tiga_tahun_lk= $request->enam_puluh_tiga_tahun_lk;
        $umur->enam_puluh_tiga_tahun_pr= $request->enam_puluh_tiga_tahun_pr;
        $umur->enam_puluh_empat_tahun_lk= $request->enam_puluh_empat_tahun_lk;
        $umur->enam_puluh_empat_tahun_pr= $request->enam_puluh_empat_tahun_pr;
        $umur->enam_puluh_lima_tahun_lk= $request->enam_puluh_lima_tahun_lk;
        $umur->enam_puluh_lima_tahun_pr= $request->enam_puluh_lima_tahun_pr;
        $umur->enam_puluh_enam_tahun_lk= $request->enam_puluh_enam_tahun_lk;
        $umur->enam_puluh_enam_tahun_pr= $request->enam_puluh_enam_tahun_pr;
        $umur->enam_puluh_tujuh_tahun_lk= $request->enam_puluh_tujuh_tahun_lk;
        $umur->enam_puluh_tujuh_tahun_pr= $request->enam_puluh_tujuh_tahun_pr;
        $umur->enam_puluh_delapan_tahun_lk= $request->enam_puluh_delapan_tahun_lk;
        $umur->enam_puluh_delapan_tahun_pr= $request->enam_puluh_delapan_tahun_pr;
        $umur->enam_puluh_sembilan_tahun_lk= $request->enam_puluh_sembilan_tahun_lk;
        $umur->enam_puluh_sembilan_tahun_pr= $request->enam_puluh_sembilan_tahun_pr;
        $umur->tujuh_puluh_tahun_lk= $request->tujuh_puluh_tahun_lk;
        $umur->tujuh_puluh_tahun_pr= $request->tujuh_puluh_tahun_pr;
        $umur->tujuh_puluh_satu_tahun_lk= $request->tujuh_puluh_satu_tahun_lk;
        $umur->tujuh_puluh_satu_tahun_pr= $request->tujuh_puluh_satu_tahun_pr;
        $umur->tujuh_puluh_dua_tahun_lk= $request->tujuh_puluh_dua_tahun_lk;
        $umur->tujuh_puluh_dua_tahun_pr= $request->tujuh_puluh_dua_tahun_pr;
        $umur->tujuh_puluh_tiga_tahun_lk= $request->tujuh_puluh_tiga_tahun_lk;
        $umur->tujuh_puluh_tiga_tahun_pr= $request->tujuh_puluh_tiga_tahun_pr;
        $umur->tujuh_puluh_empat_tahun_lk= $request->tujuh_puluh_empat_tahun_lk;
        $umur->tujuh_puluh_empat_tahun_pr= $request->tujuh_puluh_empat_tahun_pr;
        $umur->tujuh_puluh_lima_tahun_lk= $request->tujuh_puluh_lima_tahun_lk;
        $umur->tujuh_puluh_lima_tahun_pr= $request->tujuh_puluh_lima_tahun_pr;
        $umur->tujuh_puluh_enam_tahun_lk= $request->tujuh_puluh_enam_tahun_lk;
        $umur->tujuh_puluh_enam_tahun_pr= $request->tujuh_puluh_enam_tahun_pr;
        $umur->tujuh_puluh_tujuh_tahun_lk= $request->tujuh_puluh_tujuh_tahun_lk;
        $umur->tujuh_puluh_tujuh_tahun_pr= $request->tujuh_puluh_tujuh_tahun_pr;
        $umur->tujuh_puluh_delapan_tahun_lk= $request->tujuh_puluh_delapan_tahun_lk;
        $umur->tujuh_puluh_delapan_tahun_pr= $request->tujuh_puluh_delapan_tahun_pr;
        $umur->tujuh_puluh_sembilan_tahun_lk= $request->tujuh_puluh_sembilan_tahun_lk;
        $umur->tujuh_puluh_sembilan_tahun_pr= $request->tujuh_puluh_sembilan_tahun_pr;
        $umur->delapan_puluh_tahun_lk= $request->delapan_puluh_tahun_lk;
        $umur->delapan_puluh_tahun_pr= $request->delapan_puluh_tahun_pr;
        $umur->delapan_puluh_satu_tahun_lk= $request->delapan_puluh_satu_tahun_lk;
        $umur->delapan_puluh_satu_tahun_pr= $request->delapan_puluh_satu_tahun_pr;
        $umur->delapan_puluh_dua_tahun_lk= $request->delapan_puluh_dua_tahun_lk;
        $umur->delapan_puluh_dua_tahun_pr= $request->delapan_puluh_dua_tahun_pr;
        $umur->delapan_puluh_tiga_tahun_lk= $request->delapan_puluh_tiga_tahun_lk;
        $umur->delapan_puluh_tiga_tahun_pr= $request->delapan_puluh_tiga_tahun_pr;
        $umur->delapan_puluh_empat_tahun_lk= $request->delapan_puluh_empat_tahun_lk;
        $umur->delapan_puluh_empat_tahun_pr= $request->delapan_puluh_empat_tahun_pr;
        $umur->delapan_puluh_lima_tahun_lk= $request->delapan_puluh_lima_tahun_lk;
        $umur->delapan_puluh_lima_tahun_pr= $request->delapan_puluh_lima_tahun_pr;
        $umur->delapan_puluh_enam_tahun_lk= $request->delapan_puluh_enam_tahun_lk;
        $umur->delapan_puluh_enam_tahun_pr= $request->delapan_puluh_enam_tahun_pr;
        $umur->delapan_puluh_tujuh_tahun_lk= $request->delapan_puluh_tujuh_tahun_lk;
        $umur->delapan_puluh_tujuh_tahun_pr= $request->delapan_puluh_tujuh_tahun_pr;
        $umur->delapan_puluh_delapan_tahun_lk= $request->delapan_puluh_delapan_tahun_lk;
        $umur->delapan_puluh_delapan_tahun_pr= $request->delapan_puluh_delapan_tahun_pr;
        $umur->delapan_puluh_sembilan_tahun_lk= $request->delapan_puluh_sembilan_tahun_lk;
        $umur->delapan_puluh_sembilan_tahun_pr= $request->delapan_puluh_sembilan_tahun_pr;
        $umur->sembilan_puluh_tahun_lk= $request->sembilan_puluh_tahun_lk;
        $umur->sembilan_puluh_tahun_pr= $request->sembilan_puluh_tahun_pr;
        $umur->sembilan_puluh_satu_tahun_lk= $request->sembilan_puluh_satu_tahun_lk;
        $umur->sembilan_puluh_satu_tahun_pr= $request->sembilan_puluh_satu_tahun_pr;
        $umur->sembilan_puluh_dua_tahun_lk= $request->sembilan_puluh_dua_tahun_lk;
        $umur->sembilan_puluh_dua_tahun_pr= $request->sembilan_puluh_dua_tahun_pr;
        $umur->sembilan_puluh_tiga_tahun_lk= $request->sembilan_puluh_tiga_tahun_lk;
        $umur->sembilan_puluh_tiga_tahun_pr= $request->sembilan_puluh_tiga_tahun_pr;
        $umur->sembilan_puluh_empat_tahun_lk= $request->sembilan_puluh_empat_tahun_lk;
        $umur->sembilan_puluh_empat_tahun_pr= $request->sembilan_puluh_empat_tahun_pr;
        $umur->seratus_tahun_lk= $request->seratus_tahun_lk;
        $umur->seratus_tahun_pr= $request->seratus_tahun_pr;
        $umur->seratus_satu_tahun_lk= $request->seratus_satu_tahun_lk;
        $umur->seratus_satu_tahun_pr= $request->seratus_satu_tahun_pr;
        $umur->seratus_dua_tahun_lk= $request->seratus_dua_tahun_lk;
        $umur->seratus_dua_tahun_pr= $request->seratus_dua_tahun_pr;
        $umur->seratus_tiga_tahun_lk= $request->seratus_tiga_tahun_lk;
        $umur->seratus_tiga_tahun_pr= $request->seratus_tiga_tahun_pr;
        $umur->seratus_empat_tahun_lk= $request->seratus_empat_tahun_lk;
        $umur->seratus_empat_tahun_pr= $request->seratus_empat_tahun_pr;
        $umur->seratus_lima_tahun_lk= $request->seratus_lima_tahun_lk;
        $umur->seratus_lima_tahun_pr= $request->seratus_lima_tahun_pr;
        $umur->seratus_enam_tahun_lk= $request->seratus_enam_tahun_lk;
        $umur->seratus_enam_tahun_pr= $request->seratus_enam_tahun_pr;
        $umur->seratus_tujuh_tahun_lk= $request->seratus_tujuh_tahun_lk;
        $umur->seratus_tujuh_tahun_pr= $request->seratus_tujuh_tahun_pr;
        $umur->seratus_delapan_tahun_lk= $request->seratus_delapan_tahun_lk;
        $umur->seratus_delapan_tahun_pr= $request->seratus_delapan_tahun_pr;
        $umur->seratus_sembilan_tahun_lk= $request->seratus_sembilan_tahun_lk;
        $umur->seratus_sembilan_tahun_pr= $request->seratus_sembilan_tahun_pr;
        $umur->seratus_sepuluh_tahun_lk= $request->seratus_sepuluh_tahun_lk;
        $umur->seratus_sepuluh_tahun_pr= $request->seratus_sepuluh_tahun_pr;
        $umur->seratus_sebelas_tahun_lk= $request->seratus_sebelas_tahun_lk;
        $umur->seratus_sebelas_tahun_pr= $request->seratus_sebelas_tahun_pr;
        $umur->seratus_dua_belas_tahun_lk= $request->seratus_dua_belas_tahun_lk;
        $umur->seratus_dua_belas_tahun_pr= $request->seratus_dua_belas_tahun_pr;
        $umur->seratus_tiga_belas_tahun_lk= $request->seratus_tiga_belas_tahun_lk;
        $umur->seratus_tiga_belas_tahun_pr= $request->seratus_tiga_belas_tahun_pr;
        $umur->seratus_empat_belas_tahun_lk= $request->seratus_empat_belas_tahun_lk;
        $umur->seratus_empat_belas_tahun_pr= $request->seratus_empat_belas_tahun_pr;
        $umur->seratus_lima_belas_tahun_lk= $request->seratus_lima_belas_tahun_lk;
        $umur->seratus_lima_belas_tahun_pr= $request->seratus_lima_belas_tahun_pr;
        $umur->seratus_enam_belas_tahun_lk= $request->seratus_enam_belas_tahun_lk;
        $umur->seratus_enam_belas_tahun_pr= $request->seratus_enam_belas_tahun_pr;
        $umur->seratus_tujuh_belas_tahun_lk= $request->seratus_tujuh_belas_tahun_lk;
        $umur->seratus_tujuh_belas_tahun_pr= $request->seratus_tujuh_belas_tahun_pr;
        $umur->seratus_delapan_belas_tahun_lk= $request->seratus_delapan_belas_tahun_lk;
        $umur->seratus_delapan_belas_tahun_pr= $request->seratus_delapan_belas_tahun_pr;
        $umur->seratus_sembilan_belas_tahun_lk= $request->seratus_sembilan_belas_tahun_lk;
        $umur->seratus_sembilan_belas_tahun_pr= $request->seratus_sembilan_belas_tahun_pr;
        $umur->seratus_dua_puluh_tahun_lk= $request->seratus_dua_puluh_tahun_lk;
        $umur->seratus_dua_puluh_tahun_pr= $request->seratus_dua_puluh_tahun_pr;
        $umur->seratus_dua_puluh_satu_tahun_lk= $request->seratus_dua_puluh_satu_tahun_lk;
        $umur->seratus_dua_puluh_satu_tahun_pr= $request->seratus_dua_puluh_satu_tahun_pr;

        $umur->save();
     
        return redirect()->route('umur.index')
                         ->with('success','umur Has Been updated successfully');
    }
     
    
    public function destroy(UmurModel $umur) : RedirectResponse
    {
        $umur->delete();    
        return redirect()->route('umur.index')
                        ->with('success','umur has been deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new UmurImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data Umur imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new UmurExport, 'umur.xlsx');
    }

}

     
