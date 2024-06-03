<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihanController extends Controller
{
    public function pilihan()
    {
        return view('pilihan');
    }

    public function pilihan1()
    {
        return view('pilihan1');
    }

    public function pilihan2()
    {
        return view('pilihan2');
    }
}
