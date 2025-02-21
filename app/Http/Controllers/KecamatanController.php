<?php
namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KecamatanImport;
use App\Exports\KecamatanExport;
use Session;

class KecamatanController extends Controller
{
   
    public function index(Request $request) : View
    {
        $kecamatan = Kecamatan::all(); // Mendapatkan semua data
        return view('kecamatan.index', compact('kecamatan'));
     
    }

    public function create() : View
    {
        return view('kecamatan.create');
    }

     
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_kecamatan' => 'required',
        ]);

        $kecamatan = new Kecamatan; 
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();     

        return redirect()->route('kecamatan.index')
                         ->with('success', 'Kecamatan has been created successfully.');
    }
       
    public function show(Kecamatan $kecamatan) : View
    {
        return view('kecamatan.show', compact('kecamatan'));
    } 
    
    public function edit(Kecamatan $kecamatan) : View
    {
        return view('kecamatan.edit', compact('kecamatan'));
    }
   
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'nama_kecamatan' => 'required',
         ]);

        $kecamatan = Kecamatan::find($id); 
        
        // Check if kecamatan exists
        if (!$kecamatan) {
            return redirect()->route('kecamatan.index')
                            ->with('error', 'Kecamatan not found');
        }

        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();
    
       
        return redirect()->route('kecamatan.index')
                         ->with('success','kecamatan Has Been updated successfully');
    }
     

      public function destroy(Kecamatan $kecamatan) : RedirectResponse
    {
        $kecamatan->delete();    
        return redirect()->route('kecamatan.index')
                        ->with('success', 'Kecamatan has been deleted successfully');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new KecamatanImport, $request->file('excel_file'));

            // Set a success message
            Session::flash('status', 'Data Kecamatan imported successfully!');
        } catch (\Exception $e) {
            // Set an error message
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();

        }

        public function export() 
    {
        return Excel::download(new KecamatanExport, 'kecamatan.xlsx');
    }

    }        
