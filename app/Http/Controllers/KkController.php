<?php

namespace App\Http\Controllers;

use App\Models\KkModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KkImport;
use Session;



class KkController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 25;
        $data['kk'] = KkModel::orderBy('id','asc')->paginate(25); 
        $total = KkModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('kk.index', $data);
    }

    public function create() : view
    {
        return view('kk.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'kk_lk' => 'required',
          'kk_pr' => 'required',
          'kk_jml' => 'required',
          'kepemilikan_lk' => 'required',
          'kepemilikan_pr' => 'required',
          'kepemilikan_jml' => 'required',
          'belum_memiliki_lk' => 'required',
          'belum_memiliki_pr' => 'required',
          'belum_memiliki_jml' => 'required',

        ]);


        $kk = new KkModel; 
        $kk->kode = $request->kode;
        $kk->wilayah = $request->wilayah;
        $kk->kk_lk = $request->kk_lk;
        $kk->kk_pr = $request->kk_pr;
        $kk->kk_jml = $request->kk_jml;
        $kk->kepemilikan_lk = $request->kepemilikan_lk;
        $kk->kepemilikan_pr = $request->kepemilikan_pr;
        $kk->kepemilikan_jml = $request->kepemilikan_jml;
        $kk->belum_memiliki_lk = $request->belum_memiliki_lk;
        $kk->belum_memiliki_pr = $request->belum_memiliki_pr;
        $kk->belum_memiliki_jml = $request->belum_memiliki_jml;

        $kk->save();     
        return redirect()->route('kk.index')
                         ->with('success','kk has been created successfully.');
    }
       
    public function show(KkModel $kk) : view
    {
        return view('kk.show',compact('kk'));
    } 
      
    
    public function edit(KkModel $kk) : view
    {
        return view('kk.edit',compact('kk'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'kk_lk' => 'required',
          'kk_pr' => 'required',
          'kk_jml' => 'required',
          'kepemilikan_lk' => 'required',
          'kepemilikan_pr' => 'required',
          'kepemilikan_jml' => 'required',
          'belum_memiliki_lk' => 'required',
          'belum_memiliki_pr' => 'required',
          'belum_memiliki_jml' => 'required',

        ]);

        $kk = KkModel::find($id); 

        // Check if kk exists
        if (!$kk) {
            return redirect()->route('kk.index')
                            ->with('error', 'Kk not found');
        }
        $kk->kode= $request->kode;
        $kk->wilayah= $request->wilayah;
        $kk->kk_lk= $request->kk_lk;
        $kk->kk_pr= $request->kk_pr;
        $kk->kk_jml= $request->kk_jml;
        $kk->kepemilikan_lk= $request->kepemilikan_lk;
        $kk->kepemilikan_pr= $request->kepemilikan_pr;
        $kk->kepemilikan_jml= $request->kepemilikan_jml;
        $kk->belum_memiliki_lk= $request->belum_memiliki_lk;
        $kk->belum_memiliki_pr= $request->belum_memiliki_pr;
        $kk->belum_memiliki_jml= $request->belum_memiliki_jml;

        $kk->save();
     
        return redirect()->route('kk.index')
                         ->with('success','kk Has Been updated successfully');
    }
     
    
    public function destroy(KkModel $kk) : RedirectResponse
    {
        $kk->delete();    
        return redirect()->route('kk.index')
                        ->with('success','kk has been deleted successfully');
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
            Excel::import(new KkImport, $request->file('excel_file'));
            Session::flash('status', 'Kk imported successfully!');
            
        } catch (\Exception $e) {
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }


}

     
