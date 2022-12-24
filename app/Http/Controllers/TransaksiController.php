<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengambilan;
use App\Models\Penjualan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function penjualan($id)
    {
        $cek = Pengambilan::where('id', $id)->first();
        return view('admin.penjualan.create', [
            'penjualan' => $cek,
            'kategori' => Category::all(),
        ]);
    }

    public function view()
    {
        $cek = Penjualan::all();
        return view('admin.penjualan.index', [
            'penjualan' => $cek,
        ]);
    }
}
