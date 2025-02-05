<?php
namespace App\Http\Controllers;

use App\Models\DisabilitasModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DisabilitasImport;
use Session;

class DisabilitasController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 25; 
        $data['disabilitas'] = DisabilitasModel::orderBy('id', 'asc')->paginate(25); 
        $total = DisabilitasModel::count();
        $totalPages = ceil($total / $perPage);
        $data['totalpages'] = $totalPages;

        return view('disabilitas.index', $data);
    }

    public function create() : view
    {
        return view('disabilitas.create');
    }
     
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'disabilitas_fisik_lk' => 'required',
          'disabilitas_fisik_pr' => 'required',
          'disabilitas_fisik_jml' => 'required',
          'disabilitas_fisik_dan_mental_lk' => 'required',
          'disabilitas_fisik_dan_mental_pr' => 'required',
          'disabilitas_fisik_dan_mental_jml' => 'required',
          'disabilitas_netra_buta_lk' => 'required',
          'disabilitas_netra_buta_pr' => 'required',
          'disabilitas_netra_buta_jml' => 'required',
          'disabilitas_mental_jiwa_lk' => 'required',
          'disabilitas_mental_jiwa_pr' => 'required',
          'disabilitas_mental_jiwa_jml' => 'required',
          'disabilitas_rungu_wicara_lk' => 'required',
          'disabilitas_rungu_wicara_pr' => 'required',
          'disabilitas_rungu_wicara_jml' => 'required',
          'disabilitas_lainnya_lk' => 'required',
          'disabilitas_lainnya_pr' => 'required',
          'disabilitas_lainnya_jml' => 'required',
        ]);

        $disabilitas = new DisabilitasModel; 
        $disabilitas->kode = $request->kode;
        $disabilitas->wilayah = $request->wilayah;
        $disabilitas->disabilitas_fisik_lk = $request->disabilitas_fisik_lk;
        $disabilitas->disabilitas_fisik_pr = $request->disabilitas_fisik_pr;
        $disabilitas->disabilitas_fisik_jml = $request->disabilitas_fisik_jml;
        $disabilitas->disabilitas_fisik_dan_mental_lk = $request->disabilitas_fisik_dan_mental_lk;
        $disabilitas->disabilitas_fisik_dan_mental_pr = $request->disabilitas_fisik_dan_mental_pr;
        $disabilitas->disabilitas_fisik_dan_mental_jml = $request->disabilitas_fisik_dan_mental_jml;
        $disabilitas->disabilitas_netra_buta_lk = $request->disabilitas_netra_buta_lk;
        $disabilitas->disabilitas_netra_buta_pr = $request->disabilitas_netra_buta_pr;
        $disabilitas->disabilitas_netra_buta_jml = $request->disabilitas_netra_buta_jml;
        $disabilitas->disabilitas_mental_jiwa_lk = $request->disabilitas_mental_jiwa_lk;
        $disabilitas->disabilitas_mental_jiwa_pr = $request->disabilitas_mental_jiwa_pr;
        $disabilitas->disabilitas_mental_jiwa_jml = $request->disabilitas_mental_jiwa_jml;
        $disabilitas->disabilitas_rungu_wicara_lk = $request->disabilitas_rungu_wicara_lk;
        $disabilitas->disabilitas_rungu_wicara_pr = $request->disabilitas_rungu_wicara_pr;
        $disabilitas->disabilitas_rungu_wicara_jml = $request->disabilitas_rungu_wicara_jml;
        $disabilitas->disabilitas_lainnya_lk = $request->disabilitas_lainnya_lk;
        $disabilitas->disabilitas_lainnya_pr = $request->disabilitas_lainnya_pr;
        $disabilitas->disabilitas_lainnya_jml = $request->disabilitas_lainnya_jml;

        $disabilitas->save();     
        return redirect()->route('disabilitas.index')
                         ->with('success', 'disabilitas has been created successfully.');
    }
       
    public function show(DisabilitasModel $disabilitas) : view
    {
        return view('disabilitas.show', compact('disabilitas'));
    } 
      
    public function edit(DisabilitasModel $disabilitas) : view
    {
        return view('disabilitas.edit', compact('disabilitas'));
    }
     
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'disabilitas_fisik_lk' => 'required',
          'disabilitas_fisik_pr' => 'required',
          'disabilitas_fisik_jml' => 'required',
          'disabilitas_fisik_dan_mental_lk' => 'required',
          'disabilitas_fisik_dan_mental_pr' => 'required',
          'disabilitas_fisik_dan_mental_jml' => 'required',
          'disabilitas_netra_buta_lk' => 'required',
          'disabilitas_netra_buta_pr' => 'required',
          'disabilitas_netra_buta_jml' => 'required',
          'disabilitas_mental_jiwa_lk' => 'required',
          'disabilitas_mental_jiwa_pr' => 'required',
          'disabilitas_mental_jiwa_jml' => 'required',
          'disabilitas_rungu_wicara_lk' => 'required',
          'disabilitas_rungu_wicara_pr' => 'required',
          'disabilitas_rungu_wicara_jml' => 'required',
          'disabilitas_lainnya_lk' => 'required',
          'disabilitas_lainnya_pr' => 'required',
          'disabilitas_lainnya_jml' => 'required',
        ]);

        $disabilitas = DisabilitasModel::find($id); 

        // Check if disabilitas exists
        if (!$disabilitas) {
            return redirect()->route('disabilitas.index')
                            ->with('error', 'disabilitas not found');
        }
        $disabilitas->kode = $request->kode;
        $disabilitas->wilayah = $request->wilayah;
        $disabilitas->disabilitas_fisik_lk = $request->disabilitas_fisik_lk;
        $disabilitas->disabilitas_fisik_pr = $request->disabilitas_fisik_pr;
        $disabilitas->disabilitas_fisik_jml = $request->disabilitas_fisik_jml;
        $disabilitas->disabilitas_fisik_dan_mental_lk = $request->disabilitas_fisik_dan_mental_lk;
        $disabilitas->disabilitas_fisik_dan_mental_pr = $request->disabilitas_fisik_dan_mental_pr;
        $disabilitas->disabilitas_fisik_dan_mental_jml = $request->disabilitas_fisik_dan_mental_jml;
        $disabilitas->disabilitas_netra_buta_lk = $request->disabilitas_netra_buta_lk;
        $disabilitas->disabilitas_netra_buta_pr = $request->disabilitas_netra_buta_pr;
        $disabilitas->disabilitas_netra_buta_jml = $request->disabilitas_netra_buta_jml;
        $disabilitas->disabilitas_mental_jiwa_lk = $request->disabilitas_mental_jiwa_lk;
        $disabilitas->disabilitas_mental_jiwa_pr = $request->disabilitas_mental_jiwa_pr;
        $disabilitas->disabilitas_mental_jiwa_jml = $request->disabilitas_mental_jiwa_jml;
        $disabilitas->disabilitas_rungu_wicara_lk = $request->disabilitas_rungu_wicara_lk;
        $disabilitas->disabilitas_rungu_wicara_pr = $request->disabilitas_rungu_wicara_pr;
        $disabilitas->disabilitas_rungu_wicara_jml = $request->disabilitas_rungu_wicara_jml;
        $disabilitas->disabilitas_lainnya_lk = $request->disabilitas_lainnya_lk;
        $disabilitas->disabilitas_lainnya_pr = $request->disabilitas_lainnya_pr;
        $disabilitas->disabilitas_lainnya_jml = $request->disabilitas_lainnya_jml;

        $disabilitas->save(); 

        return redirect()->route('disabilitas.index')
                         ->with('success', 'disabilitas updated successfully');
    }

    public function destroy($id) : RedirectResponse
    {
        $disabilitas = DisabilitasModel::find($id);
        if (!$disabilitas) {
            return redirect()->route('disabilitas.index')
                            ->with('error', 'disabilitas not found');
        }

        $disabilitas->delete(); 
        return redirect()->route('disabilitas.index')
                         ->with('success', 'disabilitas deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new DisabilitasImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data Disabilitas imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }

    }
