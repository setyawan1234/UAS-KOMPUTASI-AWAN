@extends('admin.layout.main')
@section('title'){{'Laporan'}} @endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid pt-4 px-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Laporan</h1>
    <p class="mb-4">Berikut Merupakan Data Laporan Agrofarm</p>

    @if(Session::has('berhasil'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success,</strong>
        {{ Session::get('berhasil') }}
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="">
                <div class="row">
                    <div class="col-lg-2">
                        <span>Dari Tanggal</span>
                        <input class="form-control" type="date" name="datefrom" id="datefrom">
                    </div>
                    <div class="col-lg-2">
                        <span>Sampai Tanggal</span>
                        <input class="form-control" type="date" name="dateto" id="datefrom">
                    </div>
                    <div class="col-lg-5">
                        <input style="margin-top:21px;" class="btn btn-primary" type="submit" value="SEARCH">
                    </div>
                    <div class="col-lg-3">
                        {{-- <input style="margin-left: 80px; margin-top:21px;"  class="btn btn-success" type="submit" value="Print Data Laporan"> --}}
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#009CFF;">
                        <h4 class="mt-4">Data Pengambilan</h4>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Nama Pengambil</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($laporanPengambilan as $ambil)
                        <tr>
                            <td>{{$ambil -> id}} </td>
                            <td>{{$ambil -> nama_pengambil}}</td>
                            <td>{{$ambil -> category -> nama }}</td>

                            <td>{{$ambil -> jumlah}} kwintal</td>
                            <td>{{$ambil -> lokasi}}</td>
                            <td>{{$ambil -> tanggal_ambil}}</td>
                            <td>@if($ambil->status==1)
                                <span class="badge bg-warning text-dark">Diambil</span>
                                @else
                                <span class="badge bg-success">Terjual</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#009CFF;">
                        <h4 class="mt-5">Data Penjualan</h4>
                        <tr class="text-dark">
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
                        @foreach($laporanPenjualan as $jual)
                        <tr>
                            <td>{{$jual -> id}} </td>
                            <td>{{$jual -> nama_pembeli}}</td>
                            <td>{{$jual -> pengambilan ->nama_pengambil}}</td>
                            <td>{{$jual -> pengambilan -> category -> nama}}</td>
                            <td>{{$jual -> pengambilan -> jumlah}}</td>
                            <td>{{$jual -> lokasi}}</td>
                            <td>{{$jual -> pengambilan -> tanggal_ambil}}</td>
                            <td>{{$jual -> tanggal_jual}}</td>
                            <td>@if($jual->status==1)
                                <span class="badge bg-warning text-dark">Diambil</span>
                                @else
                                <span class="badge bg-success">Terjual</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection