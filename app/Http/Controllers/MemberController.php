<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MemberController extends Controller
{
    public function mobil() {
        $mobil = Mobil::orderBy('created_at', 'desc')->get();
        return view('member.mobil', compact('mobil'));
    }

    public function mobilDetail($id) {
        $mobil = Mobil::find($id);
        return view('member.mobil-detail', compact('mobil'));
    } 

    public function sewa(Request $requestl){
        return $requestl;
    }
}
