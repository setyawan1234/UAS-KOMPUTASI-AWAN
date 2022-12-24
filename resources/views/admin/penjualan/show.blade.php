@extends('admin.layout.main')
@section('title'){{'Show Penjualan '}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-start rounded p-4">
        <div class="card">
            <div class="card-header">
                Detail Penjualan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$penjualan ->id}}</li>
                    <li class="list-group-item"><b>Nama Pembeli : </b>{{$penjualan ->nama_pembeli}}</li>
                    <li class="list-group-item"><b>Nama Pengirim : </b>{{$penjualan -> pengambilan -> nama_pengambil}}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{$penjualan -> pengambilan -> category->nama}}</li>
                    <li class="list-group-item"><b>Jumlah : </b>{{$penjualan -> pengambilan -> jumlah}}</li>
                    <li class="list-group-item"><b>Lokasi : </b>{{$penjualan -> lokasi}}</li>
                    <li class="list-group-item"><b>Tanggal Ambil: </b>{{$penjualan -> pengambilan ->tanggal_ambil}}</li>
                    <li class="list-group-item"><b>Tanggal Jual: </b>{{$penjualan -> tanggal_jual}}</li>
                    <li class="list-group-item"><b>Status : </b>@if($penjualan -> pengambilan ->status==1)
                        <span class="badge bg-warning text-dark">Diambil</span>
                        @else
                        <span class="badge bg-success">Terjual</span>
                        @endif
                    </li>
                </ul>
                <a class="btn btn-success mt-3" href="/adminpenjualan ">Kembali</a>
                <a class="btn btn-success mt-3" href="/adminpenjualan">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection