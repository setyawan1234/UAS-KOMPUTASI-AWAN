@extends('admin.pengambilan.layout')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Pengambilan Kopi</title>
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
            <h5>Hasil Laporan Data Pengambilan Kopi</h4>
    </center>
    <h6>Tanggal : <?php $tgl = date('d - m - Y');
                    echo $tgl; ?></h6>
    <table class="table table-bordered 2px" style="text-align:center;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
                <th>tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengambilan as $test)
            <tr>
                <td>{{ $test -> id }}</td>
                <td>{{$test-> nama_pengambil}}</td>
                <td>{{$test-> category -> nama}}</td>
                <td>{{$test-> jumlah}} kwintal</td>
                <td>{{$test-> lokasi}}</td>
                <td>{{$test-> tanggal_ambil}}</td>
                <td>@if($test-> status==1)
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