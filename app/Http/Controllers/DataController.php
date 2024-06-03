<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    public function index(){
        return view('data');
    }

    public function data_proses(Request $request)
    {
        $kelas = $request->kelas;

        // Simpan nilai kelas ke dalam session
        Session::put('kelas', $kelas);
        return redirect()->route('readData');
    }
}
