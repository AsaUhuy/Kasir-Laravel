<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\facades\db;

class BarangController extends Controller
{
    public function index()
    {
        $judul = "Barang";

        $data = Barang::all();

        return view("barang.tampil", compact('data', 'judul'));
    }

    public function create()
    {
        $barang = Barang::all();
        $judul = "Barang";
        return view('barang.input', compact('judul'));
    }

    public function store(Request $request)
    {
        DB::table('barangs')->insert([

            'namabarang' =>  $request->namabarang,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/barang');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $idbarang = DB::table('barangs')->where('idbarang', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('barang.edit', ['barangs' => $idbarang]);
    }

    public function update(Request $request)
    {
        DB::table('barangs')->where('idbarang', $request->id)->update([
            'namabarang' => $request->namabarang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/barang');
    }

    public function destroy($id)
    {
        DB::table('barangs')->where('idbarang', $id)->delete();

        return redirect('/barang');
    }
}
