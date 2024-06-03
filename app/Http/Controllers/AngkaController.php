<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkaController extends Controller
{
    public function rekamA1 ()
    {
        return view ('rekamA1');
    }

    public function rekamA2 ()
    {
        return view ('rekamA2');
    }

    public function rekamA3 ()
    {
        return view ('rekamA3');
    }

}
