<?php


namespace App\Http\Controllers;

use App\Models\GoldarahModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GoldarahImport;
use Session;



class GoldarahController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 25;
        $data['goldarah'] = GoldarahModel::orderBy('id','asc')->paginate(25); 
        $total = GoldarahModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('goldarah.index', $data);
    }

    public function create() : view
    {
        return view('goldarah.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'a_lk' => 'required',
          'a_pr' => 'required',
          'a_jml' => 'required',
          'a_minus_lk' => 'required',
          'a_minus_pr' => 'required',
          'a_minus_jml' => 'required',
          'a_plus_lk' => 'required',
          'a_plus_pr' => 'required',
          'a_plus_jml' => 'required',
          'b_lk' => 'required',
          'b_pr' => 'required',
          'b_jml' => 'required',
          'b_minus_lk' => 'required',
          'b_minus_pr' => 'required',
          'b_minus_jml' => 'required',
          'b_plus_lk' => 'required',
          'b_plus_pr' => 'required',
          'b_plus_jml' => 'required',
          'ab_lk' => 'required',
          'ab_pr' => 'required',
          'ab_jml' => 'required',
          'ab_minus_lk' => 'required',
          'ab_minus_pr' => 'required',
          'ab_minus_jml' => 'required',
          'ab_plus_lk' => 'required',
          'ab_plus_pr' => 'required',
          'ab_plus_jml' => 'required',
          'o_lk' => 'required',
          'o_pr' => 'required',
          'o_jml' => 'required',
          'o_minus_lk' => 'required',
          'o_minus_pr' => 'required',
          'o_minus_jml' => 'required',
          'o_plus_lk' => 'required',
          'o_plus_pr' => 'required',
          'o_plus_jml' => 'required',
          'tidak_tahu_lk' => 'required',
          'tidak_tahu_pr' => 'required',
          'tidak_tahu_jml' => 'required',

        ]);


        $goldarah = new GoldarahModel; 
        $goldarah->kode = $request->kode;
        $goldarah->wilayah = $request->wilayah;
        $goldarah->a_lk = $request->a_lk;
        $goldarah->a_pr = $request->a_pr;
        $goldarah->a_jml = $request->a_jml;
        $goldarah->a_minus_lk = $request->a_minus_lk;
        $goldarah->a_minus_pr = $request->a_minus_pr;
        $goldarah->a_minus_jml = $request->a_minus_jml;
        $goldarah->a_plus_lk = $request->a_plus_lk;
        $goldarah->a_plus_pr = $request->a_plus_pr;
        $goldarah->a_plus_jml = $request->a_plus_jml;
        $goldarah->b_lk = $request->b_lk;
        $goldarah->b_pr = $request->b_pr;
        $goldarah->b_jml = $request->b_jml;
        $goldarah->b_minus_lk = $request->b_minus_lk;
        $goldarah->b_minus_pr = $request->b_minus_pr;
        $goldarah->b_minus_jml = $request->b_minus_jml;
        $goldarah->b_plus_lk = $request->b_plus_lk;
        $goldarah->b_plus_pr = $request->b_plus_pr;
        $goldarah->b_plus_jml = $request->b_plus_jml;
        $goldarah->ab_lk = $request->ab_lk;
        $goldarah->ab_pr = $request->ab_pr;
        $goldarah->ab_jml = $request->ab_jml;
        $goldarah->ab_minus_lk = $request->ab_minus_lk;
        $goldarah->ab_minus_pr = $request->ab_minus_pr;
        $goldarah->ab_minus_jml = $request->ab_minus_jml;
        $goldarah->ab_plus_lk = $request->ab_plus_lk;
        $goldarah->ab_plus_pr = $request->ab_plus_pr;
        $goldarah->ab_plus_jml = $request->ab_plus_jml;
        $goldarah->o_lk = $request->o_lk;
        $goldarah->o_pr = $request->o_pr;
        $goldarah->o_jml = $request->o_jml;
        $goldarah->o_minus_lk = $request->o_minus_lk;
        $goldarah->o_minus_pr = $request->o_minus_pr;
        $goldarah->o_minus_jml = $request->o_minus_jml;
        $goldarah->o_plus_lk = $request->o_plus_lk;
        $goldarah->o_plus_pr = $request->o_plus_pr;
        $goldarah->o_plus_jml = $request->o_plus_jml;
        $goldarah->tidak_tahu_lk = $request->tidak_tahu_lk;
        $goldarah->tidak_tahu_pr = $request->tidak_tahu_pr;
        $goldarah->tidak_tahu_jml = $request->tidak_tahu_jml;

        $goldarah->save();     
        return redirect()->route('goldarah.index')
                         ->with('success','goldarah has been created successfully.');
    }
       
    public function show(GoldarahModel $goldarah) : view
    {
        return view('goldarah.show',compact('goldarah'));
    } 
      
    
    public function edit(GoldarahModel $goldarah) : view
    {
        return view('goldarah.edit',compact('goldarah'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'a_lk' => 'required',
          'a_pr' => 'required',
          'a_jml' => 'required',
          'a_minus_lk' => 'required',
          'a_minus_pr' => 'required',
          'a_minus_jml' => 'required',
          'a_plus_lk' => 'required',
          'a_plus_pr' => 'required',
          'a_plus_jml' => 'required',
          'b_lk' => 'required',
          'b_pr' => 'required',
          'b_jml' => 'required',
          'b_minus_lk' => 'required',
          'b_minus_pr' => 'required',
          'b_minus_jml' => 'required',
          'b_plus_lk' => 'required',
          'b_plus_pr' => 'required',
          'b_plus_jml' => 'required',
          'ab_lk' => 'required',
          'ab_pr' => 'required',
          'ab_jml' => 'required',
          'ab_minus_lk' => 'required',
          'ab_minus_pr' => 'required',
          'ab_minus_jml' => 'required',
          'ab_plus_lk' => 'required',
          'ab_plus_pr' => 'required',
          'ab_plus_jml' => 'required',
          'o_lk' => 'required',
          'o_pr' => 'required',
          'o_jml' => 'required',
          'o_minus_lk' => 'required',
          'o_minus_pr' => 'required',
          'o_minus_jml' => 'required',
          'o_plus_lk' => 'required',
          'o_plus_pr' => 'required',
          'o_plus_jml' => 'required',
          'tidak_tahu_lk' => 'required',
          'tidak_tahu_pr' => 'required',
          'tidak_tahu_jml' => 'required',

        ]);

        $goldarah = GoldarahModel::find($id); 

        // Check if goldarah exists
        if (!$goldarah) {
            return redirect()->route('goldarah.index')
                            ->with('error', 'Goldarah not found');
        }
        $goldarah->kode= $request->kode;
        $goldarah->wilayah= $request->wilayah;
        $goldarah->a_lk= $request->a_lk;
        $goldarah->a_pr= $request->a_pr;
        $goldarah->a_jml= $request->a_jml;
        $goldarah->a_minus_lk= $request->a_minus_lk;
        $goldarah->a_minus_pr= $request->a_minus_pr;
        $goldarah->a_minus_jml= $request->a_minus_jml;
        $goldarah->a_plus_lk= $request->a_plus_lk;
        $goldarah->a_plus_pr= $request->a_plus_pr;
        $goldarah->a_plus_jml= $request->a_plus_jml;
        $goldarah->b_lk= $request->b_lk;
        $goldarah->b_pr= $request->b_pr;
        $goldarah->b_jml= $request->b_jml;
        $goldarah->b_minus_lk= $request->b_minus_lk;
        $goldarah->b_minus_pr= $request->b_minus_pr;
        $goldarah->b_minus_jml= $request->b_minus_jml;
        $goldarah->b_plus_lk= $request->b_plus_lk;
        $goldarah->b_plus_pr= $request->b_plus_pr;
        $goldarah->b_plus_jml= $request->b_plus_jml;
        $goldarah->ab_lk= $request->ab_lk;
        $goldarah->ab_pr= $request->ab_pr;
        $goldarah->ab_jml= $request->ab_jml;
        $goldarah->ab_minus_lk= $request->ab_minus_lk;
        $goldarah->ab_minus_pr= $request->ab_minus_pr;
        $goldarah->ab_minus_jml= $request->ab_minus_jml;
        $goldarah->ab_plus_lk= $request->ab_plus_lk;
        $goldarah->ab_plus_pr= $request->ab_plus_pr;
        $goldarah->ab_plus_jml= $request->ab_plus_jml;
        $goldarah->o_lk= $request->o_lk;
        $goldarah->o_pr= $request->o_pr;
        $goldarah->o_jml= $request->o_jml;
        $goldarah->o_minus_lk= $request->o_minus_lk;
        $goldarah->o_minus_pr= $request->o_minus_pr;
        $goldarah->o_minus_jml= $request->o_minus_jml;
        $goldarah->o_plus_lk= $request->o_plus_lk;
        $goldarah->o_plus_pr= $request->o_plus_pr;
        $goldarah->o_plus_jml= $request->o_plus_jml;
        $goldarah->tidak_tahu_lk= $request->tidak_tahu_lk;
        $goldarah->tidak_tahu_pr= $request->tidak_tahu_pr;
        $goldarah->tidak_tahu_jml= $request->tidak_tahu_jml;

        $goldarah->save();
     
        return redirect()->route('goldarah.index')
                         ->with('success','goldarah Has Been updated successfully');
    }
     
    
    public function destroy(GoldarahModel $goldarah) : RedirectResponse
    {
        $goldarah->delete();    
        return redirect()->route('goldarah.index')
                        ->with('success','goldarah has been deleted successfully');
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
            Excel::import(new GoldarahImport, $request->file('excel_file'));
            Session::flash('status', 'Data Goldarah imported successfully!');
            
        } catch (\Exception $e) {
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }

}

     
