<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArshipController extends Controller
{
    public function index()
    {
        $years = [2024, 2025,];
        return view('arship', compact('years'));
    }
}
