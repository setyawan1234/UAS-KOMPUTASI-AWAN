@extends('admin.layout.main')
@section('title'){{'Create Penjualan'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Penjualan</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminpenjualan" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama_pembeli">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                        <input type="text" value="{{$penjualan->nama_pengambil}}" class="form-control" id="penjualan_id" ariadescribedby="penjualan_id" readonly>

                    </div>

                    <input type="hidden" name="pengambilan_id" value="{{$penjualan -> id}}">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <input type="text" value="{{$penjualan->category -> nama}}" class="form-control" id="penjualan_id" ariadescribedby="penjualan_id" readonly>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" value="{{$penjualan->jumlah}}" id="exampleInputPassword1" name="jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal ambil</label>
                        <input type="date" value="{{$penjualan->tanggal_ambil}}" class="form-control" id="exampleInputPassword1" name="tanggal_ambil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal jual</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_jual">
                    </div>
                    <div class="form-group">
                        <label for="status" class="mb-2">Status</label>
                        <select class="form-select" name="status">
                            <option value="1">Diambil</option>
                            <option value="2">Terjual</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a class="btn btn-success mt-3" href="/adminpenjualan">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection