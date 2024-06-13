<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('user.index');
    }
}
