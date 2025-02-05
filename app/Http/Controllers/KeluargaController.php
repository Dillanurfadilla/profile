<?php
/*
 Nama file: App\Http\Controllers\KeluargaController.php
 Tools : LaravelGhost v1
 Created By : Freddy Wicaksono, M.Kom
 Tanggal : 22-Nov-2024
*/


namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class KeluargaController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        $data['keluarga'] = KeluargaModel::orderBy('id','desc')->paginate(5); 
        $total = KeluargaModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('keluarga.index', $data);
    }

    public function create() : view
    {
        return view('keluarga.create');
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


        $keluarga = new KeluargaModel; 
        $keluarga->dkb = $request->dkb;
        $keluarga->tahun = $request->tahun;
        $keluarga->kecamatans_id = $request->kecamatans_id;
        $keluarga->desas_id = $request->desas_id;
        $keluarga->agama = $request->agama;
        $keluarga->disabilitas = $request->disabilitas;
        $keluarga->golongan_darah = $request->golongan_darah;
        $keluarga->kepemilikan_kk = $request->kepemilikan_kk;
        $keluarga->pekerjaan = $request->pekerjaan;
        $keluarga->pendidikan = $request->pendidikan;
        $keluarga->status_kawin = $request->status_kawin;
        $keluarga->umur_tunggal = $request->umur_tunggal;

        $keluarga->save();     
        return redirect()->route('keluarga.index')
                         ->with('success','keluarga has been created successfully.');
    }
       
    public function show(KeluargaModel $keluarga) : view
    {
        return view('keluarga.show',compact('keluarga'));
    } 
      
    
    public function edit(KeluargaModel $keluarga) : view
    {
        return view('keluarga.edit',compact('keluarga'));
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

        $keluarga = KeluargaModel::find($id); 

        // Check if keluarga exists
        if (!$keluarga) {
            return redirect()->route('keluarga.index')
                            ->with('error', 'Keluarga not found');
        }
        $keluarga->dkb= $request->dkb;
        $keluarga->tahun= $request->tahun;
        $keluarga->kecamatans_id= $request->kecamatans_id;
        $keluarga->desas_id= $request->desas_id;
        $keluarga->agama= $request->agama;
        $keluarga->disabilitas= $request->disabilitas;
        $keluarga->golongan_darah= $request->golongan_darah;
        $keluarga->kepemilikan_kk= $request->kepemilikan_kk;
        $keluarga->pekerjaan= $request->pekerjaan;
        $keluarga->pendidikan= $request->pendidikan;
        $keluarga->status_kawin= $request->status_kawin;
        $keluarga->umur_tunggal= $request->umur_tunggal;

        $keluarga->save();
     
        return redirect()->route('keluarga.index')
                         ->with('success','keluarga Has Been updated successfully');
    }
     
    
    public function destroy(KeluargaModel $keluarga) : RedirectResponse
    {
        $keluarga->delete();    
        return redirect()->route('keluarga.index')
                        ->with('success','keluarga has been deleted successfully');
    }
}

     
