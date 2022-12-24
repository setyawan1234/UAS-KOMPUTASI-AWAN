@extends('admin.layout.main')
@section('title'){{'Create Pengambilan'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Pengambilan</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminpengambilan" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama_pengambil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <select class="form-select" name="category_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}">{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_ambil">
                    </div>
                    <div class="form-group">
                        <label for="status" class="mb-2">Status</label>
                        <select class="form-select" name="status">
                            <option value="1">Diambil</option>
                            <option value="2">Terjual</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a class="btn btn-success mt-3" href="/adminpengambilan">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection