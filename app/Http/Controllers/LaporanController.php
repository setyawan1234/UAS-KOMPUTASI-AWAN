<?php

namespace App\Http\Controllers;

use App\Models\Pengambilan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        if (isset($_GET['datefrom'])) {
            $from_date = $request['datefrom'];
            $to_date   = $request['dateto'];
            return view('admin.laporan.index', [
                'laporanPengambilan' => Pengambilan::where('tanggal_ambil', '>=', $from_date)
                    ->where('tanggal_ambil', '<=', $to_date)->get(),
                'laporanPenjualan' => Penjualan::where('tanggal_jual', '>=', $from_date)
                    ->where('tanggal_jual', '<=', $to_date)->get()
            ]);
        } else {
            return view('admin.laporan.index', [
                'laporanPengambilan' => Pengambilan::all(),
                'laporanPenjualan' => Penjualan::all()
            ]);
        }


        // $from_date = '2022-05-01';
        //$to_date = '2022-07-29';


    }
}
