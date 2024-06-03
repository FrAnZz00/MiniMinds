<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LogguruController extends Controller
{
    public function loginGuru(){
        return view('logguru');
    }

    public function login_prosesG(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nama', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.choose');
        } else {
            return redirect()->route('loginGuru')->with('failed', 'Nama atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginGuru')->with('success', 'Kamu berhasil logout');
    }
}
