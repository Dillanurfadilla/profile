<?php

namespace App\Http\Controllers;

use App\Models\AgamaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AgamaImport;
use Session;

class AgamaController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 20;
        $data['agama'] = AgamaModel::orderBy('id', 'asc')->paginate(10);
        $total = AgamaModel::count();
        $totalPages = ceil($total / $perPage);
        $data['totalpages'] = $totalPages;

        return view('agama.index', $data);
    }

    public function create() : view
    {
        return view('agama.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'wilayah' => 'required',
            'islam_lk' => 'required',
            'islam_pr' => 'required',
            'islam_jml' => 'required',
            'kristen_lk' => 'required',
            'kristen_pr' => 'required',
            'kristen_jml' => 'required',
            'katholik_lk' => 'required',
            'katholik_pr' => 'required',
            'katholik_jml' => 'required',
            'hindu_lk' => 'required',
            'hindu_pr' => 'required',
            'hindu_jml' => 'required',
            'budha_lk' => 'required',
            'budha_pr' => 'required',
            'budha_jml' => 'required',
            'khonghucu_lk' => 'required',
            'khonghucu_pr' => 'required',
            'khonghucu_jml' => 'required',
            'kepercayaan_lk' => 'required',
            'kepercayaan_pr' => 'required',
            'kepercayaan_jml' => 'required',
        ]);

        $agama = new AgamaModel; 
        $agama->kode = $request->kode;
        $agama->wilayah = $request->wilayah;
        $agama->islam_lk = $request->islam_lk;
        $agama->islam_pr = $request->islam_pr;
        $agama->islam_jml = $request->islam_jml;
        $agama->kristen_lk = $request->kristen_lk;
        $agama->kristen_pr = $request->kristen_pr;
        $agama->kristen_jml = $request->kristen_jml;
        $agama->katholik_lk = $request->katholik_lk;
        $agama->katholik_pr = $request->katholik_pr;
        $agama->katholik_jml = $request->katholik_jml;
        $agama->hindu_lk = $request->hindu_lk;
        $agama->hindu_pr = $request->hindu_pr;
        $agama->hindu_jml = $request->hindu_jml;
        $agama->budha_lk = $request->budha_lk;
        $agama->budha_pr = $request->budha_pr;
        $agama->budha_jml = $request->budha_jml;
        $agama->khonghucu_lk = $request->khonghucu_lk;
        $agama->khonghucu_pr = $request->khonghucu_pr;
        $agama->khonghucu_jml = $request->khonghucu_jml;
        $agama->kepercayaan_lk = $request->kepercayaan_lk;
        $agama->kepercayaan_pr = $request->kepercayaan_pr;
        $agama->kepercayaan_jml = $request->kepercayaan_jml;

        $agama->save();     
        return redirect()->route('agama.index')
                         ->with('success', 'agama has been created successfully.');
    }
       
    public function show(AgamaModel $agama) : view
    {
        return view('agama.show', compact('agama'));
    }
      
    public function edit(AgamaModel $agama) : view
    {
        return view('agama.edit', compact('agama'));
    }
     
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'kode' => 'required',
            'wilayah' => 'required',
            'islam_lk' => 'required',
            'islam_pr' => 'required',
            'islam_jml' => 'required',
            'kristen_lk' => 'required',
            'kristen_pr' => 'required',
            'kristen_jml' => 'required',
            'katholik_lk' => 'required',
            'katholik_pr' => 'required',
            'katholik_jml' => 'required',
            'hindu_lk' => 'required',
            'hindu_pr' => 'required',
            'hindu_jml' => 'required',
            'budha_lk' => 'required',
            'budha_pr' => 'required',
            'budha_jml' => 'required',
            'khonghucu_lk' => 'required',
            'khonghucu_pr' => 'required',
            'khonghucu_jml' => 'required',
            'kepercayaan_lk' => 'required',
            'kepercayaan_pr' => 'required',
            'kepercayaan_jml' => 'required',
        ]);

        $agama = AgamaModel::find($id); 

        // Check if agama exists
        if (!$agama) {
            return redirect()->route('agama.index')
                             ->with('error', 'Agama not found');
        }
        
        $agama->kode = $request->kode;
        $agama->wilayah = $request->wilayah;
        $agama->islam_lk = $request->islam_lk;
        $agama->islam_pr = $request->islam_pr;
        $agama->islam_jml = $request->islam_jml;
        $agama->kristen_lk = $request->kristen_lk;
        $agama->kristen_pr = $request->kristen_pr;
        $agama->kristen_jml = $request->kristen_jml;
        $agama->katholik_lk = $request->katholik_lk;
        $agama->katholik_pr = $request->katholik_pr;
        $agama->katholik_jml = $request->katholik_jml;
        $agama->hindu_lk = $request->hindu_lk;
        $agama->hindu_pr = $request->hindu_pr;
        $agama->hindu_jml = $request->hindu_jml;
        $agama->budha_lk = $request->budha_lk;
        $agama->budha_pr = $request->budha_pr;
        $agama->budha_jml = $request->budha_jml;
        $agama->khonghucu_lk = $request->khonghucu_lk;
        $agama->khonghucu_pr = $request->khonghucu_pr;
        $agama->khonghucu_jml = $request->khonghucu_jml;
        $agama->kepercayaan_lk = $request->kepercayaan_lk;
        $agama->kepercayaan_pr = $request->kepercayaan_pr;
        $agama->kepercayaan_jml = $request->kepercayaan_jml;

        $agama->save();
     
        return redirect()->route('agama.index')
                         ->with('success', 'agama has been updated successfully');
    }
     
    public function destroy(AgamaModel $agama) : RedirectResponse
    {
        $agama->delete();    
        return redirect()->route('agama.index')
                        ->with('success', 'agama has been deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new AgamaImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data agama imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }
}
