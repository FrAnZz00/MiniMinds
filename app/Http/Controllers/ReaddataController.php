<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReaddataController extends Controller
{
    public function index(){
        // Ambil nilai kelas dari session
        $kelas = Session::get('kelas');

        // Ambil data murid berdasarkan kelas yang dipilih
        $data = User::where('role', 'murid')->where('kelas', $kelas)->get();

        // Kembalikan view dengan data murid yang sesuai
        return view('readdata', compact('data'));
    }
}
