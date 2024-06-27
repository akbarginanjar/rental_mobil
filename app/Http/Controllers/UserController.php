<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index()       
    // {
    //     $users = User::query()->latest()->get();

    //     return view('users.index', compact('users'));
    // }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        try {
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->role_id = $validatedData['role_id'];
            $user->save();

            return redirect()->route('user.index')->with('success', 'User created successfully.');
        } catch (Exception $e) {
            return redirect()->route('user.index')->with('error', 'Failed to create user: ' . $e->getMessage());
        }
    }

}
