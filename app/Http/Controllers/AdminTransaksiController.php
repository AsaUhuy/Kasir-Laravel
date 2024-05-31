<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\trans;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "trans";
        $data = transaksi::all();
        return view("transaksi.tampil", compact('data', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $qty = 1;
        $subtotal = 0;
        $produk_id = request('produk_id');
        $b_detail = Barang::find($produk_id);
        $act = request('act');
        $qty = request('qty');
        if ($act == 'min') {
            if ($qty <= 1) {
                $qty = 1;
            } else {
                $qty = $qty - 1;
            }
        } else {
            $qty = $qty + 1;
        }
        $subtotal = 0;
        if ($b_detail) {
            $subtotal = $qty * $b_detail->harga;
        }
        $data = $barang->map(function ($item) {
            return [
                'idbarang' => $item->idbarang,
                'namabarang' => $item->namabarang,
            ];
        });
        return view('transaksi.input', compact('b_detail', 'data', 'qty', 'subtotal'));
    }

    protected function addTransaksi(){
        $data = [
            'idUser' => auth()->user()->id,
            'namaKasir' => auth()->user()->name,
        ];

        transaksi::create($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgltransaksi' => 'required',
            'waktutransaksi' => 'required',
            'iduser' => 'required',
            'idbarang' => 'required',
            'qty' => 'required|numeric',
            'totalharga' => 'required|numeric'
        ]);

        Transaksi::create([
            'tgltransaksi' => $request->tgltransaksi,
            'waktutransaksi' => $request->waktutransaksi,
            'iduser' => $request->iduser,
            'idbarang' => $request->idbarang,
            'qty' => $request->qty,
            'totalharga' => $request->totalharga
        ]);

        return Redirect::to('/transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
