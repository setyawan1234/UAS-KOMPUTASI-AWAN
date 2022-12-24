@extends('admin.layout.main')
@section('title'){{'Show Pengambilan'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-start rounded p-4">
        <div class="card">
            <div class="card-header">
                Detail pengambilan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$pengambilan-> id}}</li>
                    <li class="list-group-item"><b>Nama Pengirim : </b>{{$pengambilan-> nama_pengambil}}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{$pengambilan-> category->nama}}</li>
                    <li class="list-group-item"><b>Jumlah : </b>{{$pengambilan-> jumlah}}</li>
                    <li class="list-group-item"><b>Lokasi : </b>{{$pengambilan->lokasi}}</li>

                    <li class="list-group-item"><b>Tanggal : </b>{{$pengambilan->tanggal_ambil}}</li>
                    <li class="list-group-item"><b>Status : </b>@if($pengambilan->status==1)
                        <span class="badge bg-warning text-dark">Diambil</span>
                        @else
                        <span class="badge bg-success">Terjual</span>
                        @endif
                    </li>
                </ul>
                <a class="btn btn-success mt-3" href="/adminpengambilan">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection