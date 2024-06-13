<?php

namespace App\Http\Controllers;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'unique' => 'Data sudah ada!',
        ];

        // $validation = Validator::make($request->all(), $rules, $message);
        // if ($validation->fails()) {
        //     session()->put(
        //         'danger',
        //         'Data yang anda input tidak valid, silahkan di ulang'
        //     );
        //     return back()
        //         ->withErrors($validation)
        //         ->withInput();
        // }
        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make( $request->password);
        $user->save();
        session()->put('success', 'Data Berhasil diedit');
        return redirect()->route('user.index');
    }
}
