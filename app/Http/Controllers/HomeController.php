<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kecamatan;
use App\Models\DesaaModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $jumlahKecamatan = Kecamatan::count();
        $jumlahDesaa = DesaaModel::count();

        $widget = [
            'users' => $users,
            'jumlahKecamatan' => $jumlahKecamatan,
            'jumlahDesaa' => $jumlahDesaa,
        ];

        return view('home', compact('widget'));
 

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }

          
}
