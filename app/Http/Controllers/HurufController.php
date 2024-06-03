<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HurufController extends Controller
{
    public function rekamH1 ()
    {
        return view ('rekamH1');
    }

    public function rekamH2 ()
    {
        return view ('rekamH2');
    }

    public function rekamH3 ()
    {
        return view ('rekamH3');
    }

    public function huruf1 ()
    {
        return  view ('huruf1');
    }

    public function ohuruf1 ()
    {
        return view ('ohuruf1');
    }

    public function selamat2 ()
    {
        return view ('selamat2');
    }
}
