<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Mobil;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::orderBy('created_at', 'desc')->get();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    public function prosesBuktiBayar($id) {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->status = 2;
        $transaksi->save();
        $mobil = Mobil::findOrFail($transaksi->id_mobil);
        $mobil->status = 'Sedang Disewa';
        $mobil->save();
        return redirect()->back();
    }

    public function prosesPengembalian($id) {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->status = 3;
        $transaksi->save();
        $mobil = Mobil::findOrFail($transaksi->id_mobil);
        $mobil->status = 'Tersedia';
        $mobil->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
