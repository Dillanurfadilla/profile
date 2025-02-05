<?php

namespace App\Http\Controllers;

use App\Models\StatuskawinModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StatuskawinImport;
use Session;


class StatuskawinController extends Controller
{
    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 45;
        $data['statuskawin'] = StatuskawinModel::orderBy('id', 'asc')->paginate(45); 
        $total = StatuskawinModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages'] = $totalPages;
        return view('statuskawin.index', $data);
    }

    public function create() : view
    {
        return view('statuskawin.create');
    }
     
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'belum_kawin_lk' => 'required',
          'belum_kawin_pr' => 'required',
          'belum_kawin_jml' => 'required',
          'kawin_lk' => 'required',
          'kawin_pr' => 'required',
          'kawin_jml' => 'required',
          'cerai_hidup_lk' => 'required',
          'cerai_hidup_pr' => 'required',
          'cerai_hidup_jml' => 'required',
          'cerai_mati_lk' => 'required',
          'cerai_mati_pr' => 'required',
          'cerai_mati_jml' => 'required',
        ]);

        $statuskawin = new StatuskawinModel; 
        $statuskawin->kode = $request->kode;
        $statuskawin->wilayah = $request->wilayah;
        $statuskawin->belum_kawin_lk = $request->belum_kawin_lk;
        $statuskawin->belum_kawin_pr = $request->belum_kawin_pr;
        $statuskawin->belum_kawin_jml = $request->belum_kawin_jml;
        $statuskawin->kawin_lk = $request->kawin_lk;
        $statuskawin->kawin_pr = $request->kawin_pr;
        $statuskawin->kawin_jml = $request->kawin_jml;
        $statuskawin->cerai_hidup_lk = $request->cerai_hidup_lk;
        $statuskawin->cerai_hidup_pr = $request->cerai_hidup_pr;
        $statuskawin->cerai_hidup_jml = $request->cerai_hidup_jml;
        $statuskawin->cerai_mati_lk = $request->cerai_mati_lk;
        $statuskawin->cerai_mati_pr = $request->cerai_mati_pr;
        $statuskawin->cerai_mati_jml = $request->cerai_mati_jml;

        $statuskawin->save();     
        return redirect()->route('statuskawin.index')
                         ->with('success', 'Statuskawin has been created successfully.');
    }

    public function show(StatuskawinModel $statuskawin) : view
    {
        return view('statuskawin.show', compact('statuskawin'));
    } 
      
    public function edit(StatuskawinModel $statuskawin) : view
    {
        return view('statuskawin.edit', compact('statuskawin'));
    }
     
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'belum_kawin_lk' => 'required',
          'belum_kawin_pr' => 'required',
          'belum_kawin_jml' => 'required',
          'kawin_lk' => 'required',
          'kawin_pr' => 'required',
          'kawin_jml' => 'required',
          'cerai_hidup_lk' => 'required',
          'cerai_hidup_pr' => 'required',
          'cerai_hidup_jml' => 'required',
          'cerai_mati_lk' => 'required',
          'cerai_mati_pr' => 'required',
          'cerai_mati_jml' => 'required',
        ]);

        $statuskawin = StatuskawinModel::find($id); 

        // Check if statuskawin exists
        if (!$statuskawin) {
            return redirect()->route('statuskawin.index')
                            ->with('error', 'Statuskawin not found');
        }
        $statuskawin->kode = $request->kode;
        $statuskawin->wilayah = $request->wilayah;
        $statuskawin->belum_kawin_lk = $request->belum_kawin_lk;
        $statuskawin->belum_kawin_pr = $request->belum_kawin_pr;
        $statuskawin->belum_kawin_jml = $request->belum_kawin_jml;
        $statuskawin->kawin_lk = $request->kawin_lk;
        $statuskawin->kawin_pr = $request->kawin_pr;
        $statuskawin->kawin_jml = $request->kawin_jml;
        $statuskawin->cerai_hidup_lk = $request->cerai_hidup_lk;
        $statuskawin->cerai_hidup_pr = $request->cerai_hidup_pr;
        $statuskawin->cerai_hidup_jml = $request->cerai_hidup_jml;
        $statuskawin->cerai_mati_lk = $request->cerai_mati_lk;
        $statuskawin->cerai_mati_pr = $request->cerai_mati_pr;
        $statuskawin->cerai_mati_jml = $request->cerai_mati_jml;

        $statuskawin->save();
     
        return redirect()->route('statuskawin.index')
                         ->with('success', 'Statuskawin has been updated successfully');
    }

    public function destroy(StatuskawinModel $statuskawin) : RedirectResponse
    {
        $statuskawin->delete();    
        return redirect()->route('statuskawin.index')
                        ->with('success', 'Statuskawin has been deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new StatuskawinImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data Statuskawin imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }
}
