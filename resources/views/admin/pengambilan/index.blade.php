@extends('admin.layout.main')
@section('title'){{'Pengambilan'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Pengambilan</h6>
            <div class="d-flex justify-content-end">
                <a href="/adminpengambilan/create" class="btn btn-primary m-1">Create Pengambilan</a>
                <a href="/pengambilan_pdf" class="btn btn-success m-1">Print Pdf</a>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
            <div class="d-flex justify-content-start">
                <form action="/pengambilan/search" class="d-flex justify-content-start" method="GET">
                    <input type="search" class="form-control mr-sm-2" placeholder="Search" name="search">
                    <button class="btn btn-primary btn-outline-light ms-2" type="submit">Go</button>
                </form>

            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengambilan as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> nama_pengambil}}</td>
                        <td>{{$item -> category -> nama }}</td>

                        <td>{{$item -> jumlah}} Ton</td>
                        <td>{{$item -> lokasi}}</td>
                        <td>{{$item -> tanggal_ambil}}</td>
                        <td>@if($item->status==1)
                            <span class="badge bg-warning text-dark">Diambil</span>
                            @else
                            <span class="badge bg-success">Terjual</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="/adminpengambilan/{{$item -> id}}"><i class="bi bi-eye"></i></a>
                            <a class="btn btn- m-1" href="/adminpengambilan/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>

                            <form action="/adminpengambilan/{{$item -> id}}" method="POST" class="d-inline">@csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini? ')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="d-flex justify-content-start">
            {{$pengambilan -> links()}}
        </div>
    </div>
</div>
@endsection