<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegguruController extends Controller
{
    public function createguru(){
        return view('regguru');
    }

    public function storeguru(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'password' => 'required',
            'role' => 'required',
            'kelas' => 'required'
        ]);

        $validated['password'] = Hash::make($request->input('password'));

        User::create($validated);

        return redirect('/');

        // $validator = Validator::make($request->all(),[
        //     'username' => 'required',
        //     'password' => 'required',
        //     'role' => 'required|in:guru,murid',
        // ],[
        //     'username.required' => 'Nama harus diisi',
        //     'password.required' => 'Kelas / Password harus diisi',
        //     'role.required' => 'Pilih Peran',
        //     'role.in' => 'Peran harus guru atau murid',
        // ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['username'] = $request->input('username');
        // $data['password'] = $request->input('password');
        // $data['role'] = $request->input('role');

        // User::create($data);

        // return redirect()->route('login')->with('success', 'Data berhasil disimpan');

    }
}
