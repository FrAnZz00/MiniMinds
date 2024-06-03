<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenggambarController extends Controller
{
    public function menggambar ()
    {
        return view ('menggambar');
    }

    public function selamat3 ()
    {
        return view ('selamat3');
    }
}
