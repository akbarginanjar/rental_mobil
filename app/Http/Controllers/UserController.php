<?php

namespace App\Http\Controllers;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;


class UserController extends Controller
{
    public function index()
    {
        $user = User ::all();
        return view('user.index', compact('user'));
    }
    
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->password = Hash::make($request->password);
        $user->save();
        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->route('user.index');
    }

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
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('user.index');
    }
}