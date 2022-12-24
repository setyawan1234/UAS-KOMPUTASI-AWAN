@extends('admin.penjualan.layout')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Penjualan Kopi</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>SISTEM INFORMASI PENCATATAN STOK PT AGROFARM GLOBALINDO INVESTAMA</h4>
            <h5>Hasil Laporan Data Penjualan Kopi</h4>
    </center>
    <h6>Tanggal : <?php $tgl = date('d - m - Y');
                    echo $tgl; ?></h6>
    <table class="table table-bordered 2px" style="text-align:center;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Nama Pengambil</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal Ambil</th>
                <th scope="col">Tanggal Jual</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $item)
            <tr>
                <td>{{$item -> id}} </td>
                <td>{{$item -> nama_pembeli}}</td>
                <td>{{$item -> pengambilan ->nama_pengambil}}</td>
                <td>{{$item -> pengambilan -> category -> nama}}</td>
                <td>{{$item -> pengambilan -> jumlah}}</td>
                <td>{{$item -> lokasi}}</td>
                <td>{{$item -> pengambilan -> tanggal_ambil}}</td>
                <td>{{$item -> tanggal_jual}}</td>
                <td>@if($item->status==1)
                    <span class="badge bg-warning text-dark">Diambil</span>
                    @else
                    <span class="badge bg-success">Terjual</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>

@endseection