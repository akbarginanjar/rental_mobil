<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::orderBy('created_at', 'desc')->get();
        return view('admin.mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'plat' => 'required',
            'merk' => 'required',
            'harga_sewa' => 'required',
        ]);

        $mobil = new Mobil();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->plat = $request->plat;
        $mobil->nomor_mobil = $request->nomor_mobil;
        $mobil->merk = $request->merk;
        $mobil->jenis = $request->jenis;
        $mobil->slug = Str::slug($request->merk);
        $mobil->deskripsi = $request->deskripsi;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->status = 'Tersedia';
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'gambar' => 'required',
            'plat' => 'required',
            'merk' => 'required',
            'harga_sewa' => 'required',
        ]);
        
        $mobil = Mobil::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->plat = $request->plat;
        $mobil->nomor_mobil = $request->nomor_mobil;
        $mobil->merk = $request->merk;
        $mobil->jenis = $request->jenis;
        $mobil->slug = Str::slug($request->merk);
        $mobil->deskripsi = $request->deskripsi;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!Mobil::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('mobil.index');
    }
}