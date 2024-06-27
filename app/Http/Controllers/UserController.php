<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facedes\Hash;
use Validator;


class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'unique' => 'Data sudah ada!',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            session()->put(
                'danger',
                'Data yang anda input tidak valid, silahkan di ulang'
            );
            return back()
                ->withErrors($validation)
                ->withInput();
        }
        $user = new user();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->route('user.index');
    }
}