@extends('admin.layout.main')
@section('title'){{'Penjualan'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Penjualan</h6>


            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Data Pengambilan</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="background-color:#7ce4f3;">
                                    <th style="text-align:center;">No</th>
                                    <th style="text-align:center;">Nama Pengirim</th>
                                    <th style="text-align:center;">Katergori</th>
                                    <th style="text-align:center;">tanggal</th>
                                    <th style="text-align:center;">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($pengambilan as $jual)
                                    @if ($jual -> status == 1)
                                    <tr>
                                        <td>{{$jual->id}}</td>
                                        <td class="text-capitalize">{{$jual->nama_pengambil}}</td>
                                        <td>{{$jual-> category -> nama}}</td>
                                        <td>{{$jual-> tanggal_ambil}}</td>
                                        <td><a class="btn btn-secondary" href="/transaksipenjualan/{{$jual->id}}"><i class="bi bi-gear"></i></a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Button to Open the Modal -->

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#myModal">Tambah penjualan</button>
                <a href="/penjualan_pdf" class="btn btn-success m-1">Print PDF</a>
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
                <form action="/penjualan/search" class="d-flex justify-content-start" method="GET">
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
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal Ambil</th>
                        <th scope="col">Tanggal Jual</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
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
                        <td>
                            <a class="btn btn-info" href="/adminpenjualan/{{$item -> id}}"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-primary" href="/adminpenjualan/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>

                            <form action="/adminpenjualan/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$penjualan -> links()}}
        </div>
    </div>
</div>
@endsection