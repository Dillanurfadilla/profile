<?php
/*
 Nama file: App\Http\Controllers\PendudukController.php
 Tools : LaravelGhost v1
 Created By : Freddy Wicaksono, M.Kom
 Tanggal : 22-Nov-2024
*/


namespace App\Http\Controllers;

use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PendudukController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        $data['penduduk'] = PendudukModel::orderBy('id','desc')->paginate(5); 
        $total = PendudukModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('penduduk.index', $data);
    }

    public function create() : view
    {
        return view('penduduk.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'dkb' => 'required',
          'tahun' => 'required',
          'kecamatans_id' => 'required',
          'desas_id' => 'required',
          'agama' => 'required',
          'disabilitas' => 'required',
          'golongan_darah' => 'required',
          'kepemilikan_kk' => 'required',
          'pekerjaan' => 'required',
          'pendidikan' => 'required',
          'status_kawin' => 'required',
          'umur_tunggal' => 'required',

        ]);


        $penduduk = new PendudukModel; 
        $penduduk->dkb = $request->dkb;
        $penduduk->tahun = $request->tahun;
        $penduduk->kecamatans_id = $request->kecamatans_id;
        $penduduk->desas_id = $request->desas_id;
        $penduduk->agama = $request->agama;
        $penduduk->disabilitas = $request->disabilitas;
        $penduduk->golongan_darah = $request->golongan_darah;
        $penduduk->kepemilikan_kk = $request->kepemilikan_kk;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->status_kawin = $request->status_kawin;
        $penduduk->umur_tunggal = $request->umur_tunggal;

        $penduduk->save();     
        return redirect()->route('penduduk.index')
                         ->with('success','penduduk has been created successfully.');
    }
       
    public function show(PendudukModel $penduduk) : view
    {
        return view('penduduk.show',compact('penduduk'));
    } 
      
    
    public function edit(PendudukModel $penduduk) : view
    {
        return view('penduduk.edit',compact('penduduk'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'dkb' => 'required',
          'tahun' => 'required',
          'kecamatans_id' => 'required',
          'desas_id' => 'required',
          'agama' => 'required',
          'disabilitas' => 'required',
          'golongan_darah' => 'required',
          'kepemilikan_kk' => 'required',
          'pekerjaan' => 'required',
          'pendidikan' => 'required',
          'status_kawin' => 'required',
          'umur_tunggal' => 'required',

        ]);

        $penduduk = PendudukModel::find($id); 

        // Check if penduduk exists
        if (!$penduduk) {
            return redirect()->route('penduduk.index')
                            ->with('error', 'Penduduk not found');
        }
        $penduduk->dkb= $request->dkb;
        $penduduk->tahun= $request->tahun;
        $penduduk->kecamatans_id= $request->kecamatans_id;
        $penduduk->desas_id= $request->desas_id;
        $penduduk->agama= $request->agama;
        $penduduk->disabilitas= $request->disabilitas;
        $penduduk->golongan_darah= $request->golongan_darah;
        $penduduk->kepemilikan_kk= $request->kepemilikan_kk;
        $penduduk->pekerjaan= $request->pekerjaan;
        $penduduk->pendidikan= $request->pendidikan;
        $penduduk->status_kawin= $request->status_kawin;
        $penduduk->umur_tunggal= $request->umur_tunggal;

        $penduduk->save();
     
        return redirect()->route('penduduk.index')
                         ->with('success','penduduk Has Been updated successfully');
    }
     
    
    public function destroy(PendudukModel $penduduk) : RedirectResponse
    {
        $penduduk->delete();    
        return redirect()->route('penduduk.index')
                        ->with('success','penduduk has been deleted successfully');
    }
}

     
