<?php

namespace App\Http\Controllers;

use App\Models\DesaaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DesaaImport;
use App\Exports\DesaaExport;
use Session;


class DesaaController extends Controller
{

    public function index(Request $request) : view
    {
        $desaa = DesaaModel::all(); // Mendapatkan semua data
        return view('desaa.index', compact('desaa'));
   
    }

    public function create() : view
    {
        return view('desaa.create');
    }

     // Import data from an Excel file
     public function import(Request $request)
     {
         // Validate the uploaded file
         $request->validate([
             'excel_file' => 'required|file|mimes:xlsx,xls,csv',
         ]);
 
         try {
             // Import the Excel file
             Excel::import(new DesaaImport, $request->file('excel_file'));
             Session::flash('status', 'Data Desaa imported successfully!');
             
         } catch (\Exception $e) {
             Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
         }
 
         // Redirect back to the import page
         return redirect()->back();
     }
 
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'desas_id' => 'required',
          'kecamatans_id' => 'required',
          'nama_desa' => 'required',
          'created_at' => 'required',
          'updated_at' => 'required',

        ]);


        $desaa = new DesaaModel; 
        $desaa->desas_id = $request->desas_id;
        $desaa->kecamatans_id = $request->kecamatans_id;
        $desaa->nama_desa = $request->nama_desa;
        $desaa->created_at = $request->created_at;
        $desaa->updated_at = $request->updated_at;

        $desaa->save();     
        return redirect()->route('desaa.index')
                         ->with('success','desaa has been created successfully.');
    }
       
    public function show(DesaaModel $desaa) : view
    {
        return view('desaa.show',compact('desaa'));
    } 
      
    
    public function edit(DesaaModel $desaa) : view
    {
        return view('desaa.edit',compact('desaa'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'desas_id' => 'required',
          'kecamatans_id' => 'required',
          'nama_desa' => 'required',
          
        ]);

        $desaa = DesaaModel::find($id); 

        // Check if desaa exists
        if (!$desaa) {
            return redirect()->route('desaa.index')
                            ->with('error', 'Desaa not found');
        }
        $desaa->desas_id= $request->desas_id;
        $desaa->kecamatans_id= $request->kecamatans_id;
        $desaa->nama_desa= $request->nama_desa;
        
        $desaa->save();
     
        return redirect()->route('desaa.index')
                         ->with('success','desaa Has Been updated successfully');
    }
     
    
    public function destroy(DesaaModel $desaa) : RedirectResponse
    {
        $desaa->delete();    
        return redirect()->route('desaa.index')
                        ->with('success','desaa has been deleted successfully');
    }

    public function export() 
    {
        return Excel::download(new DesaaExport, 'desaa.xlsx');
    }

}

     
