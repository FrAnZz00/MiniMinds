<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChooseController extends Controller
{
    public function choose(){
        return view('choose');
    }

    public function create(){
        return view('regsiswa');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'class' => 'required',
        ],[
            'name.required' => 'Nama harus diisi',
            'class.required' => 'Kelas harus diisi',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->input('name');
        $data['kelas'] = $request->input('class');

        User::create($data);

        // Tambahkan notifikasi
        Session::flash('success', 'Data berhasil ditambahkan!');

        return redirect()->route('choose')->with('success', 'Data berhasil disimpan');

    }
}
