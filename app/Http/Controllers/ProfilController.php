<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 

class ProfilController extends Controller
{
    public function show(Request $request)
    {
        // Mendapatkan pengguna yang sedang masuk
            return view('profil');
        }
} 

