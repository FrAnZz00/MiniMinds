<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function huruf()
    {
        return view('huruf');
    }

    public function angka()
    {
        return view('angka');
    }

    public function warna()
    {
        return view('warna');
    }

    public function bentuk()
    {
        return view('bentuk');
    }

    public function mewarnai()
    {
        return view('mewarnai');
    }

    public function menggambar()
    {
        return view('menggambar');
    }
}
