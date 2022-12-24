<?php

namespace App\Http\Controllers;

use App\Models\Pengambilan;
use App\Models\Penjualan;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class CetakPdfController extends Controller
{
    public function cetak_pdf()
    {
        $key = Pengambilan::all();
        $pdf = PDF::loadview('admin.pengambilan.pdf', [
            'pengambilan' => $key,
        ])->setPaper('a4', 'potrait');
        return $pdf->download('Laporan Pengembalian.pdf');
    }
    public function cetakpdf()
    {
        $key = Penjualan::all();
        $pdf = PDF::loadview('admin.penjualan.pdf', [
            'penjualan' => $key,
        ])->setPaper('a4', 'potrait');
        return $pdf->download('Laporan Penjualan.pdf');
    }
}
