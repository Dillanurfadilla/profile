<?php

namespace App\Http\Controllers;

use App\Models\PendidikanModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PendidikanImport;
use Session;

class PendidikanController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 25;
        $data['pendidikan'] = PendidikanModel::orderBy('id','asc')->paginate(25); 
        $total = PendidikanModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('pendidikan.index', $data);
    }

    public function create() : view
    {
        return view('pendidikan.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'tidak_belum_sekolah_lk' => 'required',
          'tidak_belum_sekolah_pr' => 'required',
          'tidak_belum_sekolah_jml' => 'required',
          'belum_tamat_sd_sederajat_lk' => 'required',
          'belum_tamat_sd_sederajat_pr' => 'required',
          'belum_tamat_sd_sederajat_jml' => 'required',
          'tamat_sd_sederajat_lk' => 'required',
          'tamat_sd_sederajat_pr' => 'required',
          'tamat_sd_sederajat_jml' => 'required',
          'sltp_sederajat_lk' => 'required',
          'sltp_sederajat_pr' => 'required',
          'sltp_sederajat_jml' => 'required',
          'slta_sederajat_lk' => 'required',
          'slta_sederajat_pr' => 'required',
          'slta_sederajat_jml' => 'required',
          'diploma_i_ii_lk' => 'required',
          'diploma_i_ii_pr' => 'required',
          'diploma_i_ii_jml' => 'required',
          'akademi_diploma_iii_smuda_lk' => 'required',
          'akademi_diploma_iii_smuda_pr' => 'required',
          'akademi_diploma_iii_smuda_jml' => 'required',
          'diploma_iv_strata_i_lk' => 'required',
          'diploma_iv_strata_i_pr' => 'required',
          'diploma_iv_strata_i_jml' => 'required',
          'strata_ii_lk' => 'required',
          'strata_ii_pr' => 'required',
          'strata_ii_jml' => 'required',
          'strata_iii_lk' => 'required',
          'strata_iii_pr' => 'required',
          'strata_iii_jml' => 'required',

        ]);


        $pendidikan = new PendidikanModel; 
        $pendidikan->kode = $request->kode;
        $pendidikan->wilayah = $request->wilayah;
        $pendidikan->tidak_belum_sekolah_lk = $request->tidak_belum_sekolah_lk;
        $pendidikan->tidak_belum_sekolah_pr = $request->tidak_belum_sekolah_pr;
        $pendidikan->tidak_belum_sekolah_jml = $request->tidak_belum_sekolah_jml;
        $pendidikan->belum_tamat_sd_sederajat_lk = $request->belum_tamat_sd_sederajat_lk;
        $pendidikan->belum_tamat_sd_sederajat_pr = $request->belum_tamat_sd_sederajat_pr;
        $pendidikan->belum_tamat_sd_sederajat_jml = $request->belum_tamat_sd_sederajat_jml;
        $pendidikan->tamat_sd_sederajat_lk = $request->tamat_sd_sederajat_lk;
        $pendidikan->tamat_sd_sederajat_pr = $request->tamat_sd_sederajat_pr;
        $pendidikan->tamat_sd_sederajat_jml = $request->tamat_sd_sederajat_jml;
        $pendidikan->sltp_sederajat_lk = $request->sltp_sederajat_lk;
        $pendidikan->sltp_sederajat_pr = $request->sltp_sederajat_pr;
        $pendidikan->sltp_sederajat_jml = $request->sltp_sederajat_jml;
        $pendidikan->slta_sederajat_lk = $request->slta_sederajat_lk;
        $pendidikan->slta_sederajat_pr = $request->slta_sederajat_pr;
        $pendidikan->slta_sederajat_jml = $request->slta_sederajat_jml;
        $pendidikan->diploma_i_ii_lk = $request->diploma_i_ii_lk;
        $pendidikan->diploma_i_ii_pr = $request->diploma_i_ii_pr;
        $pendidikan->diploma_i_ii_jml = $request->diploma_i_ii_jml;
        $pendidikan->akademi_diploma_iii_smuda_lk = $request->akademi_diploma_iii_smuda_lk;
        $pendidikan->akademi_diploma_iii_smuda_pr = $request->akademi_diploma_iii_smuda_pr;
        $pendidikan->akademi_diploma_iii_smuda_jml = $request->akademi_diploma_iii_smuda_jml;
        $pendidikan->diploma_iv_strata_i_lk = $request->diploma_iv_strata_i_lk;
        $pendidikan->diploma_iv_strata_i_pr = $request->diploma_iv_strata_i_pr;
        $pendidikan->diploma_iv_strata_i_jml = $request->diploma_iv_strata_i_jml;
        $pendidikan->strata_ii_lk = $request->strata_ii_lk;
        $pendidikan->strata_ii_pr = $request->strata_ii_pr;
        $pendidikan->strata_ii_jml = $request->strata_ii_jml;
        $pendidikan->strata_iii_lk = $request->strata_iii_lk;
        $pendidikan->strata_iii_pr = $request->strata_iii_pr;
        $pendidikan->strata_iii_jml = $request->strata_iii_jml;

        $pendidikan->save();     
        return redirect()->route('pendidikan.index')
                         ->with('success','pendidikan has been created successfully.');
    }
       
    public function show(PendidikanModel $pendidikan) : view
    {
        return view('pendidikan.show',compact('pendidikan'));
    } 
      
    
    public function edit(PendidikanModel $pendidikan) : view
    {
        return view('pendidikan.edit',compact('pendidikan'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'tidak_belum_sekolah_lk' => 'required',
          'tidak_belum_sekolah_pr' => 'required',
          'tidak_belum_sekolah_jml' => 'required',
          'belum_tamat_sd_sederajat_lk' => 'required',
          'belum_tamat_sd_sederajat_pr' => 'required',
          'belum_tamat_sd_sederajat_jml' => 'required',
          'tamat_sd_sederajat_lk' => 'required',
          'tamat_sd_sederajat_pr' => 'required',
          'tamat_sd_sederajat_jml' => 'required',
          'sltp_sederajat_lk' => 'required',
          'sltp_sederajat_pr' => 'required',
          'sltp_sederajat_jml' => 'required',
          'slta_sederajat_lk' => 'required',
          'slta_sederajat_pr' => 'required',
          'slta_sederajat_jml' => 'required',
          'diploma_i_ii_lk' => 'required',
          'diploma_i_ii_pr' => 'required',
          'diploma_i_ii_jml' => 'required',
          'akademi_diploma_iii_smuda_lk' => 'required',
          'akademi_diploma_iii_smuda_pr' => 'required',
          'akademi_diploma_iii_smuda_jml' => 'required',
          'diploma_iv_strata_i_lk' => 'required',
          'diploma_iv_strata_i_pr' => 'required',
          'diploma_iv_strata_i_jml' => 'required',
          'strata_ii_lk' => 'required',
          'strata_ii_pr' => 'required',
          'strata_ii_jml' => 'required',
          'strata_iii_lk' => 'required',
          'strata_iii_pr' => 'required',
          'strata_iii_jml' => 'required',

        ]);

        $pendidikan = PendidikanModel::find($id); 

        // Check if pendidikan exists
        if (!$pendidikan) {
            return redirect()->route('pendidikan.index')
                            ->with('error', 'Pendidikan not found');
        }
        $pendidikan->kode= $request->kode;
        $pendidikan->wilayah= $request->wilayah;
        $pendidikan->tidak_belum_sekolah_lk= $request->tidak_belum_sekolah_lk;
        $pendidikan->tidak_belum_sekolah_pr= $request->tidak_belum_sekolah_pr;
        $pendidikan->tidak_belum_sekolah_jml= $request->tidak_belum_sekolah_jml;
        $pendidikan->belum_tamat_sd_sederajat_lk= $request->belum_tamat_sd_sederajat_lk;
        $pendidikan->belum_tamat_sd_sederajat_pr= $request->belum_tamat_sd_sederajat_pr;
        $pendidikan->belum_tamat_sd_sederajat_jml= $request->belum_tamat_sd_sederajat_jml;
        $pendidikan->tamat_sd_sederajat_lk= $request->tamat_sd_sederajat_lk;
        $pendidikan->tamat_sd_sederajat_pr= $request->tamat_sd_sederajat_pr;
        $pendidikan->tamat_sd_sederajat_jml= $request->tamat_sd_sederajat_jml;
        $pendidikan->sltp_sederajat_lk= $request->sltp_sederajat_lk;
        $pendidikan->sltp_sederajat_pr= $request->sltp_sederajat_pr;
        $pendidikan->sltp_sederajat_jml= $request->sltp_sederajat_jml;
        $pendidikan->slta_sederajat_lk= $request->slta_sederajat_lk;
        $pendidikan->slta_sederajat_pr= $request->slta_sederajat_pr;
        $pendidikan->slta_sederajat_jml= $request->slta_sederajat_jml;
        $pendidikan->diploma_i_ii_lk= $request->diploma_i_ii_lk;
        $pendidikan->diploma_i_ii_pr= $request->diploma_i_ii_pr;
        $pendidikan->diploma_i_ii_jml= $request->diploma_i_ii_jml;
        $pendidikan->akademi_diploma_iii_smuda_lk= $request->akademi_diploma_iii_smuda_lk;
        $pendidikan->akademi_diploma_iii_smuda_pr= $request->akademi_diploma_iii_smuda_pr;
        $pendidikan->akademi_diploma_iii_smuda_jml= $request->akademi_diploma_iii_smuda_jml;
        $pendidikan->diploma_iv_strata_i_lk= $request->diploma_iv_strata_i_lk;
        $pendidikan->diploma_iv_strata_i_pr= $request->diploma_iv_strata_i_pr;
        $pendidikan->diploma_iv_strata_i_jml= $request->diploma_iv_strata_i_jml;
        $pendidikan->strata_ii_lk= $request->strata_ii_lk;
        $pendidikan->strata_ii_pr= $request->strata_ii_pr;
        $pendidikan->strata_ii_jml= $request->strata_ii_jml;
        $pendidikan->strata_iii_lk= $request->strata_iii_lk;
        $pendidikan->strata_iii_pr= $request->strata_iii_pr;
        $pendidikan->strata_iii_jml= $request->strata_iii_jml;

        $pendidikan->save();
     
        return redirect()->route('pendidikan.index')
                         ->with('success','pendidikan Has Been updated successfully');
    }
     
    
    public function destroy(PendidikanModel $pendidikan) : RedirectResponse
    {
        $pendidikan->delete();    
        return redirect()->route('pendidikan.index')
                        ->with('success','pendidikan has been deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new PendidikanImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data Pendidikan imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();

        }



}

     
