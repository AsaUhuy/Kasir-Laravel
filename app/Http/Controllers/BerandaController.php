<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "Data";
        $isi = "Ini adalah halaman beranda";
        return view('beranda',[ 'data' =>$title, 'isi'=>$isi]);
    }
}
